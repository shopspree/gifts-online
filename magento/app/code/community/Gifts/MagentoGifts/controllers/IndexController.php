<?php

/**
 * Gifts frontend controller
 * 
 * @author asafam
 */

class Gifts_MagentoGifts_IndexController extends Mage_Core_Controller_Front_Action
{
	/**
	 * 
	 */
	function indexAction() {
		$this->loadLayout();
		$this->renderLayout();
		
		echo 'hello world';
	}
	
	/**
	 * 
	 * @param string $name
	 */
	function sayHelloAction($name='asaf') {
		echo 'hello ' . $name;
	}
	
	/**
	 * 
	 */
	function buyerAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
	
	/**
	 * 
	 */
	function recepientAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
}

