<?php

/**
 * 支付控制器
 * 
 */
class Payment_IndexController extends BaseController
{
	public function listAction ()
	{
		$this->render('payment-list');
	}
}