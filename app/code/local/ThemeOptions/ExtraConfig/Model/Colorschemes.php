<?php class ThemeOptions_ExtraConfig_Model_Colorschemes
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'blue', 'label'=>Mage::helper('ExtraConfig')->__('Blue')),
            array('value'=>'green', 'label'=>Mage::helper('ExtraConfig')->__('Green')),
            array('value'=>'orange', 'label'=>Mage::helper('ExtraConfig')->__('Orange')),
            array('value'=>'black', 'label'=>Mage::helper('ExtraConfig')->__('Black'))         
        );
    }

}?>