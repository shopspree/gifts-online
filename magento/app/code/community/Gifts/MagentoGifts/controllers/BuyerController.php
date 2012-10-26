<?php

/**
 * Gifts frontend controller
 * 
 * @author asafam
 */

class Gifts_MagentoGifts_BuyerController extends Mage_Core_Controller_Front_Action
{
	/**
	 * 
	 */
	function indexAction() {
		if ($this->getRequest()->isPost()){
			$int1 = $this->getRequest()->getPost('int1');
			$int2 = $this->getRequest()->getPost('int2');
			$result = $int1 * $int2;
			Mage::getSingleton('customer/session')->addSuccess("$int1 * $int2 = $result");
		}
		
		$this->loadLayout();
		
		$this->_initLayoutMessages('customer/session');
		
		$this->renderLayout();
	}
	
}

