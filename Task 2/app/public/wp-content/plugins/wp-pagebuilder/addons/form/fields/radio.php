<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( isset( $field['radio_field_options'] ) ){
	$options = $field['radio_field_options'];
	if (count($options)){
		foreach ($options as $option){
			?>
			<span class="wppb-form-field-item wppb-form-field-radio">
					<input type="radio" name="wppb_default_form[<?php echo $fieldIndex; ?>]" value="<?php echo esc_attr( $option['label'] );?>" <?php echo $fieldAttr; ?> > <label for="<?php echo esc_attr( $option['label'] ); ?>"> <?php echo esc_html( $option['label'] ); ?>
			</label></span>
			<?php
		}
	}
}
