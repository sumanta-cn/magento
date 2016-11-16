<?php

class Cn_Banner_Block_Adminhtml_Banner_Renderer_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{	
	public function render(Varien_Object $row)
	{
		$bannerId =  $row->getData($this->getColumn()->getIndex());
		$banner = Mage::getModel('banner/banner')->load($bannerId);

		$value = '<img src="">';
		if($banner->getFilename()!= '')
		{
		     $value='<img src="' . Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . $banner->getFilename() . '" width="250" height="100" />';
		}

		return $value;
	}
}