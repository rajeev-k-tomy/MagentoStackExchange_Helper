<?php
class Rkt_ForwardCategoryToProduct_Model_Observer
{
	public function forwardSingleProductCategory(Varien_Event_Observer $observer)
	{
		//get event data
		$action = $observer->getControllerAction();
		$request = $action->getRequest();

		//get category id
		$categoryId = (int)$request->getParam('id', false);

		//grab category collection
		$layer = Mage::getModel('catalog/layer')->setCurrentCategory($categoryId);
		$collection = $layer->getProductCollection();

		//check whether category count is 1. If YES, then do magic
		if ($collection->getSize() == 1) {

			//prepare parameters that needs for the action `catalog/product/view`
			$product = $collection->getFirstItem();
			$actionName = 'view';
			$controllerName = 'product';
			$moduleName = 'catalog';
			$params = array(
				'category' => $categoryId,
				'id'       => (int)$product->getId()
			);

			/**
			 * This one is important.
			 * we need to set pathinfo to the required path .
			 * otherwise current pathInfo will overwrite _params of rewrite while
			 * in the next matching process in the standard router
			 */
			$pathInfo = 'catalog/product/view/id' . $product->getId();
			$request->setPathInfo($pathInfo);

			//trigger Mage_Core_Controller_Varien_Action::_forward()
            $e = new Mage_Core_Controller_Varien_Exception();
			$e->prepareForward($actionName, $controllerName, $moduleName, $params);
			throw $e;
		}

		return $this;
	}
}