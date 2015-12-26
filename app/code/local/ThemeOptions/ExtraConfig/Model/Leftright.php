<?php class ThemeOptions_ExtraConfig_Model_Leftright
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'left', 'label'=>Mage::helper('ExtraConfig')->__('Left')),
            array('value'=>'right', 'label'=>Mage::helper('ExtraConfig')->__('Right'))            
        );
    }

}?>