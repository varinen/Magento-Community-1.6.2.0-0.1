<?php

class Solvingmagento_Newletterrest_Model_CommandContext 
{
    private $_params = array();
    private $_error = '';
    
    public function __init()
    {
        $this->_params = Mage::app()->getRequest();
        return $this;
    }
    
    public function addParam($key, $value)
    {
        $this->_params[$key] = $value;
        return $this;
    }
    
    public function get($key)
    {
        return $this->_params[$key];
    }
    
    public function setError($error)
    {
        $this->_error = $error;
        return $this;
    }
    
    public function getError()
    {
        return $this->_error;
    }
}
?>
