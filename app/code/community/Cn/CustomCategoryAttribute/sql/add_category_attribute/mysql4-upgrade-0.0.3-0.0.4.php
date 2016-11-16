<?php
$this->startSetup();

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'category_thumb', array(
    'group'         => 'General Information',
    'input'         => 'image',
    'type'          => 'varchar',
    'label'         => 'Category Thumbnail Image',
    'backend'       => 'catalog/category_attribute_backend_image',
    'visible'       => 1,
    'required'        => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$this->endSetup();
?>