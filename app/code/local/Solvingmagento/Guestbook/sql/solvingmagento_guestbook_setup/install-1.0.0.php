<?php
/* @var $this Mage_Code_Module_Resource_Setup */
$this->startSetup();

$table = $this->getConnection()
    ->newTable($this->getTable('solvingmagento_guestbook/entry'));

$table->addColumn(
    'entry_id', 
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array(
        'identity'  =>  true,
        'primary'   =>  true     
    )
);
$table->addColumn(
    'created_at', 
    Varien_Db_Ddl_Table::TYPE_DATETIME,
    null,
    array(
        'nullable'  =>  false    
    )
)->addColumn(
    'name', 
    Varien_Db_Ddl_Table::TYPE_VARCHAR,
    255,
    array(
        'nullable'  =>  false    
    )
)->addColumn(
    'email', 
    Varien_Db_Ddl_Table::TYPE_VARCHAR,
    255,
    array(
        'nullable'  =>  false    
    )
)->addColumn(
    'comment', 
    Varien_Db_Ddl_Table::TYPE_TEXT,
    null,
    array(
        'nullable'  =>  false    
    )
);

$this->getConnection()->createTable($table);

$this->endSetup();

?>
