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
 * Index Controller
 *
 * This is the default controller of this module. So any request to this module
 * which lack with a proper controller reference is going to endup in this
 * controller.
 *
 * @category ITEP
 * @package  ITEP_Incomm
 * @author   Rajeev K Tomy <programmer.rkt@gmail.com>
 * @since    Class available since Release 1.0.0
 */
class ITEP_Incomm_IndexController extends Mage_Core_Controller_Front_Action
{

	/**
	 * Default action
	 *
	 * This default action is used to show a message 'hello world'.
	 *
	 * @return void
	 */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}