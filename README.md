# Rkt_CmsPageToProduct

This extension is used to convert a CMS Page to Product Page.

## Theory

It uses an observer cms_page_render to do this trick. The only change that you need to do here is replace `CMS_PAGE_IDENTIFIER` with your cms page identifier and `PRODUCT_ID` with id of product that you need to show in Cms page. These two constants you can find inside the observer class `Rkt_CmsPageToProduct_Model_Observer`

## Reference

[Customizing a product page using view.phtml doesn't pull images](http://magento.stackexchange.com/questions/80745/customizing-a-product-page-using-view-phtml-doesnt-pull-images/80754#80754)