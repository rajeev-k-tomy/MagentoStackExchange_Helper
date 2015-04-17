<?php
/**
 * Rkt_FlexibleHead extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE_FH.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category       Rkt
 * @package        Rkt_FlexibleHead
 * @copyright      Copyright (c) 2015   
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */ 

/**
 * Page Html Flexible Head Block
 *
 * This head block is actually a wrapper block of Magento's default block class
 * `Mage_Page_Block_Html_Head`. The purpose of this block is to overcome a small 
 * difficulty of the above default block.
 *
 * The definition of `Mage_Page_Block_Html_Head::getCssJsHtml()` method makes it
 * impossible to use the block again inside of `head` block. This block will allow 
 * us to define any number of `head` blocks without touching any core files. This block
 * has all of the power of `Mage_Page_Block_Html_Head` + the power of using the block anytime
 * anywhere including the `head` block itself !
 * 
 * @category    Rkt
 * @package     Rkt_FlexibleHead
 * @author      Rajeev K Tomy <programmer.rkt@gmail.com>
 */
class Rkt_FlexibleHead_Block_Page_Html_Head extends Mage_Page_Block_Html_Head
{

	/**
     * Initialize template
     *
     */
    protected function _construct()
    {
        $this->setTemplate('rkt_flexiblehead/page/html/head.phtml');
    }

	/**
     * to check whether a css or js associated with the head block.
     *
     * @return boolean
     */
    public function cssOrJsExists()
    {
        return isset($this->_data['items']) ? true : false;
    }
}