# Rkt_ForwardCategoryToProduct

This is a Magento extension which do a redirect to product page from a category page if the category in request have only one product in it. The product page will be of the product in that category.

The advantage of this extension is two.

1. There will be no categories page with only one product

2. It will show the product page instead of the category by keeping the Url of Category Itself.

# Theory

This extension actually doing a `_forward()` action if the conditions are met. It observes to the event `controller_action_predispatch_catalog_category_view` and then do a _forward_ to product page if conditions are met.

For more details, please have a look on these threads :

- [Thread 1](http://magento.stackexchange.com/questions/74895/mask-product-url-when-theres-only-one-available-in-category/82411#82411)
- [Thread 2](http://magento.stackexchange.com/questions/82550/forward-category-page-to-product-view-page-not-working)

# What you can study from this extension

- You can study how to observe to a frontend event.
- You can study how router is processing a request (See `Observer.php`)