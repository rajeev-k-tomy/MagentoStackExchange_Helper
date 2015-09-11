<?php
/**
 * Observer Class
 *
 * Listening  : cms_page_render
 *
 * @category    Rkt
 * @package     Rkt_CmsPageToProduct_
 * @author      Rajeev K Tomy <rajeevphpdeveloper@gmail.com>
 */
class Rkt_CmsPageToProduct_Model_Observer
{
    /**
     * page identifier constants
     *
     * replace this with your cms page identifier
     */
    const CMS_PAGE_IDENTIFIER = 'test-page';

    /**
     * product id
     *
     * replace this with product id that which you need to show in cms page.
     */
    const PRODUCT_ID = 418;

    /**
     * Use to convert a CMS Page to Product page
     *
     * @param  Varien_Event_Observer                 $observer
     * @return Rkt_CmsPageToProduct_Model_Observer
     */
    public function convertToProductPage(Varien_Event_Observer $observer)
    {
        //getting  event data
        $page = $observer->getEvent()->getPage();
        $action = $observer->getEvent()->getControllerAction();

        //verify the right page and add `catalog_product_view` handle
        if ($page->getIdentifier() == self::CMS_PAGE_IDENTIFIER) {
            $action->getLayout()->getUpdate()
                ->addHandle('catalog_product_view');

            //register product
            $product = Mage::getModel('catalog/product')->load(self::PRODUCT_ID);
            if ($product instanceof Mage_Catalog_Model_Product) {
                Mage::register('product', $product);
                Mage::register('current_product', $product);
            }
        }

        return $this;
    }
}