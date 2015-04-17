<?php
/**
 * Rkt_RemoveCategoryTab extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE_RCH.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category       Rkt
 * @package        Rkt_RemoveCategoryTab
 * @copyright      Copyright (c) 2015   
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Observer of Remove Category Tab extension
 *
 * @category   Rkt
 * @package    Rkt_RemoveCategoryTab
 * @author     Rajeev K Tomy <programmer.rkt@gmail.com>
 */
class Rkt_RemoveCategoryTab_Model_Observer
{

	/**
	 * tab id of `category product` tab
	 */
	const CATEGORY_PRODUCT_TAB_ID = 'products';

	/**
	 * Use to remove unwanted tabs from category tabs (admin section)
	 * 
	 * @param  Varien_Event_Observer $observer
	 * @return Rkt_RemoveCategoryTab_Model_Observer
	 */
	public function removeUnwantedCategoryTabs(Varien_Event_Observer $observer)
	{
		$tabs = $observer->getEvent()->getTabs();
		$tabs->removeTab(self::CATEGORY_PRODUCT_TAB_ID);
		return $this;
	}
}