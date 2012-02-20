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
 * Interface for loadable test environment data
 *
 */
interface EcomDev_PHPUnit_Model_Test_Loadable_Interface
{
    /**
     * Loads external data by test case instance
     *
     * @param EcomDev_PHPUnit_Test_Case $testCase
     * @return EcomDev_PHPUnit_Model_Test_Loadable_Interface
     */
    public function loadByTestCase(EcomDev_PHPUnit_Test_Case $testCase);

    /**
     * Applies external data
     *
     * @return EcomDev_PHPUnit_Model_Test_Loadable_Interface
     */
    public function apply();

    /**
     * Reverts applied data
     *
     * @return EcomDev_PHPUnit_Model_Test_Loadable_Interface
     */
    public function discard();
}
