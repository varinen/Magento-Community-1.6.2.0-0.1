<?php

class Solvingmagento_Guestbook_Test_Config_Main extends EcomDev_PHPUnit_Test_Case_Config
{
    public function testSetupResources()
    {
       $this->assertSetupResourceDefined();
       $this->assertSetupResourceExists();
       
    }
    
    public function testTableAlias()
    {
        $this->assertTableAlias(
            'solvingmagento_guestbook/entry', 
            'solvingmagento_guestbook_entry'
        );
    }
    
    public function testClassAliases()
    {
        $this->assertModelAlias(
            'solvingmagento_guestbook/entry', 
            'Solvingmagento_Guestbook_Model_Entry'
        );
        
        $this->assertResourceModelAlias(
            'solvingmagento_guestbook/entry', 
            'Solvingmagento_Guestbook_Model_Resource_Entry');
        
        $this->assertHelperAlias(
            'solvingmagento_guestbook', 
            'Solvingmagento_Guestbook_Helper_Data'
        );
    }
    
    
}
?>
