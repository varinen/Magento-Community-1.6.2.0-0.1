<?php

class Solvingmagento_Newsletterrest_SubscriberController extends
    Solvingmagento_Newsletterrest_Model_Abstract_Controller
{
    private $_context;
    
    public function indexAction()
    {
        $this->_context = Mage::getModel('newsletterrest/commandcontext');
        
        $commandName = 'unknown';
        
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'POST': $commandName = 'add';
                break;
            case 'PUT': $commandName = 'update';
                break;
            case 'DELETE': $commandName = 'delete';
                break;
            case 'GET': $commandName = 'get';
                break;
        }
        
        $commandFactory = Mage::getModel('newsletterrest/commandfactory');
        
        try {
            $command = $commandFactory->getCommand($commandName);
        } catch (Exception $e) {
            Mage::logException($e);
            $this->notImplementedMethod();
        }
        
        $this->_setResponse($command->execute($this->_context));
    }
}
?>
