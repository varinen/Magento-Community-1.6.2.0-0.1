<?php

class Solvingmagento_Guestbook_Test_Model_Entry extends
    EcomDev_PHPUnit_Test_Case
{
    
    protected $_model = null;
    
    protected function setUp()
    {
        parent::setUp();
        
        $this->_model = Mage::getModel('solvingmagento_guestbook/entry');
    }
    
    /**
     * 
     * @dataProvider dataProvider
     */
    public function testValidate($dataSet, $data)
    {
        $this->_model->setData($data);
        
        $result = $this->_model->validate();
        
        //compare expected results with actual results frm the model validation
        $this->assertSame(
            $this->expected($dataSet)->getResult(), 
            $result
        );
    }
}
?>
