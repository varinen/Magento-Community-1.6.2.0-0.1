<?php

class EcomDev_PHPUnit_Model_Mysql4_Fixture_Exception extends RuntimeException
{
	public function __construct($message, Exception $previous)
	{
		parent::__construct($message, 0, $previous);
	}
}