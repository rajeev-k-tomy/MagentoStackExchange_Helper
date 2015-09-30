<?php
class ISN_Layouts_Model_Observer
{
	public function beforeLoadLayout(Varien_Event_Observer $observer)
	{
		//get layouts
		$layout = $observer->getEvent()->getLayout();
		$action = $observer->getEvent()->getAction();

		//make sure it is a category page.
		if ($action->getFullActionName() == 'catalog_category_view') {

			//get page layout code
			$category = Mage::registry('current_category');
			$settings = Mage::getSingleton('catalog/design')
				->getDesignSettings($category);
			$pl = $settings->getPageLayout();

			//add  page layout handle correspond to page layout code.
			if ($pl) {
				$layout->helper('page/layout')->applyHandle($pl);
			}
		}

		return $this;
	}
}
