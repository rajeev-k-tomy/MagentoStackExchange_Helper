# Flexible Head For Magento 

## Need of Flexible Head extension

In most of the cases, it is impossible to include a `page/html_head` type block inside `head` block (which is also a `page/html_head` type block). Using this extension, you can use a custom block `rkt_flexeblehead/page_html_head` block type in your layout file which has all of the power of `page/html_head` type block, but without causing any problems.

## Why can't I use a `page/html_head` block inside `head` block ?

You can definitely use another block of type `page/html_head` inside `head` block (which is also a block of type `page/html_head`), but under certain conditions. The condition is, if you use such a block in your layout, then you need to make sure, your new block of type `page/html_head` is used in your layout for adding any js or css. Without defining a js or css, then Magento will provide you this exception

> 2015-04-15T18:26:01+00:00 ERR (3): Notice: Undefined index: items  in .../magento/app/code/core/Mage/Page/Block/Html/Head.php on line 167
2015-04-15T18:26:01+00:00 ERR (3): Warning: Invalid argument supplied for foreach()  in .../magento/app/code/core/Mage/Page/Block/Html/Head.php on line 167

The problem resides inside the method `Mage_Page_Block_Html_Head::getCssJsHtml()`. For more details, you can **[look into this thread](http://magento.stackexchange.com/questions/63726/error-when-adding-a-block-in-page-xml/63742#63742)**.

## How can you use this extension

This extension introduce you a new block of type `rkt_flexeblehead/page_html_head` which is just a wrapper of `page/html_head` with some modifications. This block type is very flexible. It can be used anywhere in your layout. It can use even inside the block `head` without any problems.

By default, this extension defines a block of type `rkt_flexeblehead/page_html_head` inside the `head` section. This means this block is available in every page of Magento with a reference name `flexiblehead` once you have successfully installed this extension. So that you can go and add a js or css using this block. An example is shown below.

    <catalog_product_view>
		<reference name="flexiblehead">
			<action method="addItem"><type>skin_css</type><item>css/rkt_flexiblehead/example.css</item></action>
			<action method="addItem"><type>skin_js</type><item>js/rkt_flexiblehead/example.js</item></action>
		</reference>
	</catalog_product_view>