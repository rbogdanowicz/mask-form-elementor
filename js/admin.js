// Mask Form Elementor v2.2
// Plugin URI: https://bogdanowicz.com.br/mask-form-elementor/
(function ($) {
	$(document).ready(function () {
		for (var x = 0; x < maskFields.fields.length; x++) {
			elementor.hooks.addFilter('elementor_pro/forms/content_template/field/' + maskFields.fields[x], function (empty, item, i, settings) {
				var itemClasses = item.css_classes;
				itemClasses = 'elementor-field-textual ' + itemClasses;
				
				var value = '';
				var placeholder = '';
				var required = '';
				var id = 'id="form_field_' + i + '"';

				if( item.field_value ){
					  value = item.field_value;
				}

				if( item.field_label ){
					  placeholder = item.field_label;
				}

				if( item.required ){
					  required = ' required="required"';
				}

				if( item.custom_id ){
					  id = 'id="' + item.custom_id + '"';
				}

				return '<input size="1" type="text" value="' + value + '" class="elementor-field elementor-size-' + settings.input_size + ' ' + itemClasses + '" placeholder="' + placeholder + '" name="form_field_' + i + '" ' + id + required + ' >';
			});
		}
	});
})(jQuery);