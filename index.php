<?php defined('ABSPATH') or die('The silence is god!');

/*
Plugin Name: Mask Form Elementor
Description: Plugin para incluir máscaras nos formulários do Elementor Pro.
Plugin URI: https://bogdanowicz.com.br/mask-form-elementor/
Author: Rodrigo Bogdanowicz
Author URI: https://www.bogdanowicz.com.br
Version: 3.0
Text Domain: mask-form-elementor 
*/

function maskef_load_scripts () {
    wp_enqueue_script( 'jquery.mask.min.js', plugin_dir_url( __FILE__ ) . 'js/jquery.mask.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script( 'maskformelementor.js',  plugin_dir_url( __FILE__ ) . 'js/maskformelementor.js', array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'maskef_load_scripts' );


function maskef_load_admin_scripts()
{
    wp_enqueue_script('maskef-admin', plugins_url('js/admin.js', __FILE__), array('jquery'), time());
    wp_localize_script(
        'maskef-admin',
        'maskFields',
        array(
            'fields' => array_keys( maskef_get_field_types() )
        )
    );
}
add_action('elementor/editor/after_enqueue_scripts', 'maskef_load_admin_scripts');

function maskef_get_field_types()
{
    $types = array();
    $types['maskdate'] = __('Máscara: Data', 'mask-form-elementor');
    $types['masktime'] = __('Máscara: Horário', 'mask-form-elementor');
    $types['maskdate_time'] = __('Máscara: Data e Horário', 'mask-form-elementor');
    $types['maskcep'] = __('Máscara: CEP', 'mask-form-elementor');
    $types['maskphone'] = __('Máscara: Telefone sem DDD', 'mask-form-elementor');
    $types['masktelephone_with_ddd'] = __('Máscara: Telefone', 'mask-form-elementor');
    $types['maskphone_with_ddd'] = __('Máscara: Telefone com nono digito', 'mask-form-elementor');
    $types['maskcpfcnpj'] = __('Máscara: Cpf ou Cnpj', 'mask-form-elementor');
    $types['maskcpf'] = __('Máscara: CPF', 'mask-form-elementor');
    $types['maskcnpj'] = __('Máscara: CNPJ', 'mask-form-elementor');
    $types['maskmoney'] = __('Máscara: Monetário', 'mask-form-elementor');
    $types['maskip_address'] = __('Máscara: Endereço de IP', 'mask-form-elementor');
    $types['maskpercent'] = __('Máscara: Porcentagem', 'mask-form-elementor');
    //$types['maskplaca'] = __('Máscara: Placa', 'mask-form-elementor');
    //$types['maskuser_chars'] = __('Máscara: Usuário (letras e números)', 'mask-form-elementor');
    $types['maskcard_number'] = __('Máscara: Número Cartão de Crédito', 'mask-form-elementor');
    $types['maskcard_date'] = __('Máscara: Validade Cartão de Crédito', 'mask-form-elementor');
    return $types;
}

function maskef_add_field_types($types)
{
    return array_merge($types, maskef_get_field_types());
}

add_filter('elementor_pro/forms/field_types', 'maskef_add_field_types');

function maskef_render_field_types($item, $item_index, $el)
{
    $mask_class = substr($item['field_type'], 4, strlen($item['field_type']));
	
    $el->set_render_attribute( 'input' . $item_index, 'type', 'tel' );
    $el->add_render_attribute( 'input' . $item_index, 'class', 'elementor-field-textual ' . $mask_class );
	
	if( $item['field_label'] ){
        $el->add_render_attribute( 'input' . $item_index, 'placeholder', $item['field_label'] );
    } 

    echo '<input size="1" ' . $el->get_render_attribute_string( 'input' . $item_index ) . '>'; 
}

foreach (array_keys(maskef_get_field_types()) as $field_type) {
    add_action("elementor_pro/forms/render_field/{$field_type}", "maskef_render_field_types", 10, 3);
}