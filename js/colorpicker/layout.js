jQuery(document).ready(function(){
    jQuery('.input-color').ColorPicker({
    	onSubmit: function(hsb, hex, rgb, el) {
    		jQuery(el).val(hex);
    		jQuery(el).ColorPickerHide();
    	},
    	onBeforeShow: function () {
    		jQuery(this).ColorPickerSetColor(this.value);
    	},
        onHide: function(hsb, hex, rgb, el){
            jQuery(el).val(hex);
        },
        onChange: function(hsb, hex, rgb, el) {
    		jQuery(el).val(hex);
    	}
    })
    .bind('keyup', function(){
    	jQuery(this).ColorPickerSetColor(this.value);
    });
});