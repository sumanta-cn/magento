<?php
class Cn_Banner_Block_Banner extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
    public function getBanner()     
    { 
        if (!$this->hasData('banner')) {
            $this->setData('banner', Mage::registry('banner'));
        }
        return $this->getData('banner');
        
    }

    public function getBannerCollection()
    {
        $bannerCollection = Mage::getModel('banner/banner')->getCollection()->addFieldToFilter('status',array('eq'=>'1'));
        return $bannerCollection;
    }
}