<?php
/**
 * Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * This extension is developed for study purpose and it is tested on 
 * Magento 1.9.1 version. You can find the source for this extension
 * at http://magento.stackexchange.com/questions/54192/
 * disabel-cache-in-cms-page-using-a-custom-module
 *
 * @category   Custom Extension
 * @package    Rkt_CustomBlock
 * @author     programmer_rkt
 * @copyright  Copyright (c) 2015(http://www.rktinaction.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Custom Block Class: Helloworld
 */
class Rkt_CustomBlock_Block_Helloworld extends Mage_Core_Block_Template
{
	/**
	 * A custom method use to return a simple string.
	 * 
	 * @return string
	 */
	public function getText()
	{
		return "I am inside `" . get_class(). "` block and it is my first custom block ever !";
	}
}