<?php

class Solvingmagento_Newsletterrest_Model_CommandFactory
{
    static function getCommand($commandName)
    {
        $commandClass = Mage::getModel('newsletterrest/'.
            strtolower($commandName).'command');
        if (is_object($commandClass) && (is_callable($commandClass, 'execute'))) {
            return $commandClass;                
        } else {
            throw new Exception(sprintf('Command %s not found', $commandName));
        }
    }
}
?>
