# MagentoStackExchange_Helper
This repository is used to holds code/extensions which I used for answering in @stackMagento.

This repository holds multiple branches. Each of those branches will hold different contents. These contents may be code snippets, extensions or anything. Every branches are constructed for future references.

# Extensions Available
## Rkt_CustomBlock 
This is a simple magento extension which is used to illustrate how can we create a custom block in Magento. Tested in `Magento-1.9.1`.

SO Question Reference : 
- **[creating block not working](http://magento.stackexchange.com/questions/56396/creating-block-not-working/)**
- **[New block in custom module from controller not loading](http://magento.stackexchange.com/questions/69161/new-block-in-custom-module-from-controller-not-loading/69162?noredirect=1#69161)**

## Rkt_FlexibleHead
In most of the cases, it is impossible to include a `page/html_head type` block inside head block (which is also a `page/html_head type` block). Using this extension, you can use a custom block `rkt_flexeblehead/page_html_head` block type in your layout file which has all of the power of `page/html_head` type block, but without causing any problems.

SO Question Reference : **[Error when adding a block in page.xml](http://magento.stackexchange.com/questions/63726/error-when-adding-a-block-in-page-xml/63742#63742)**.

## Rkt_RemoveCategoryTab
This extension is used to remove a tab from cateogry edit section in admin side of Magento. This module can be used to study how magento is processing an admin event.

SO Question Reference : **[have a look on this thread](http://magento.stackexchange.com/questions/63913/remove-the-category-product-from-category-edit/63920#63920)**

## Rkt_CmsPageToProduct
This extension is used to convert a CMS Page to Product Page.

SO Question Reference : **[Customizing a product page using view.phtml doesn't pull images](http://magento.stackexchange.com/questions/80745/customizing-a-product-page-using-view-phtml-doesnt-pull-images/80754#80754)**

## Rkt_ForwardCategoryToProduct
This is a Magento extension which do a redirect to product page from a category page if the category in request have only one product in it. The product page will be of the product in that category.

SO Question Reference :
- **[Thread 1](http://magento.stackexchange.com/questions/74895/mask-product-url-when-theres-only-one-available-in-category/82411#82411)**
- **[Thread 2](http://magento.stackexchange.com/questions/82550/forward-category-page-to-product-view-page-not-working)**

## ISN_Layouts
Magento extension which adds a custom page layout. It also include page layout handle in category pages.
reference

SO Question Reference : **[Custom category layout not working](http://magento.stackexchange.com/questions/83453/custom-category-layout-not-working/)**

