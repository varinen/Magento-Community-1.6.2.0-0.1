<?php
/**
 * PHP Unit test suite for Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   EcomDev
 * @package    EcomDev_PHPUnit
 * @copyright  Copyright (c) 2012 EcomDev BV (http://www.ecomdev.org)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Ivan Chepurnyi <ivan.chepurnyi@ecomdev.org>
 */

/**
 * Implementation of app area for a test
 *
 *
 */

class EcomDev_PHPUnit_Model_App_Area
    extends Mage_Core_Model_App_Area
    implements EcomDev_PHPUnit_Isolation_Interface
{
    const AREA_TEST = 'test';
    const AREA_ADMINHTML = 'adminhtml';

    /**
     * Reset all the data,
     * related to a particular area
     *
     * @return EcomDev_PHPUnit_Model_App_Area
     */
    public function reset()
    {
        $this->_loadedParts = array();
        $this->resetEvents();
        $this->resetDesign();
        $this->resetTranslate();
        return $this;
    }

    /**
     * Resets events area data
     *
     * @return EcomDev_PHPUnit_Model_App_Area
     */
    public function resetEvents()
    {
        $this->_application->removeEventArea($this->_code);
        return $this;
    }

    /**
     * Resets design related area data
     *
     *
     * @return EcomDev_PHPUnit_Model_App_Area
     */
    public function resetDesign()
    {
        Mage::getSingleton('core/design')->unsetData();
        Mage::getSingleton('core/design_package')->reset();
        return $this;
    }

    /**
     * Resets translator data
     *
     * @return EcomDev_PHPUnit_Model_App_Area
     */
    public function resetTranslate()
    {
        $translator = $this->_application->getTranslator();
        EcomDev_Utils_Reflection::setRestrictedPropertyValue($translator, '_config', null);
        EcomDev_Utils_Reflection::setRestrictedPropertyValue($translator, '_locale', null);
        EcomDev_Utils_Reflection::setRestrictedPropertyValue($translator, '_cacheId', null);
        EcomDev_Utils_Reflection::setRestrictedPropertyValue($translator, '_translateInline', null);
        EcomDev_Utils_Reflection::setRestrictedPropertyValue($translator, '_dataScope', null);
        EcomDev_Utils_Reflection::setRestrictedPropertyValue($translator, '_data', array());
        return $this;
    }
}