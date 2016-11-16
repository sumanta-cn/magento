<?php
$installer = $this;
$installer->startSetup();
$installer->getConnection()->addColumn(
    $this->getTable('banner'),//table name 

    'banner_url',     //column name
    //'varchar(255) NOT NULL'  //datatype definition
     'text NOT NULL'
    );

$installer->endSetup();