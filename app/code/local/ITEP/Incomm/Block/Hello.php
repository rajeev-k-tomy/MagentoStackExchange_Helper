<?php
/**
 * ITEP_Incomm extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE_FH.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category       ITEP
 * @package        ITEP_Incomm
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Hello Block
 *
 * Hello Block is used to manage all sort of things which are related to
 * hello world page.
 *
 * @category ITEP
 * @package  ITEP_Incomm
 * @author   Rajeev K Tomy <programmer.rkt@gmail.com>
 * @since    Class available since Release 1.0.0
 */
class ITEP_Incomm_Block_Hello extends Mage_Core_Block_Template
{

	/**
	 * Use to show `hello world` heading.
	 *
	 * @return string
	 */
	public function getBlockHeading()
	{
		return "Hello World !!";
	}


	/**
	 * Use to show `hello world` content.
	 *
	 * @return string
	 */
	public function getContent()
	{
		return "You know, I am new to Magento. But I am sure, I will fight tight and win him";
	}
}