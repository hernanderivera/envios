<?php
/*
Plugin Name: Envíos por CorreoArgentino y Flex
Plugin URI: https://localhost
Description: Plugin de envíos
Version: 1.0.0
Author: Leonardo Rodriguez
Author URI: https://localhost
*/
 
if ( ! defined( 'WPINC' ) ) {die;}
if ( ! defined( 'ABSPATH' ) ) {exit;}
 
$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

if ( in_array( 'woocommerce/woocommerce.php',  $active_plugins) ) {

	add_filter( 'woocommerce_shipping_methods', 'tipos_de_envio' );
		
	function tipos_de_envio( $methods ) {

		$methods['correoargentino_sucursal'] = 'WC_Correoargentino_Sucursal';
		$methods['correoargentino_domicilio'] = 'WC_Correoargentino_Domicilio';
		$methods['moto_flex'] = 'WC_Motomensajeria_Flex';

	return $methods;
	}

	add_action( 'woocommerce_shipping_init', 'tipos_de_envio_init' );

	function tipos_de_envio_init(){

		require_once plugin_dir_path(__FILE__) . 'clases/class-correoargentino-sucursal.php';
		require_once plugin_dir_path(__FILE__) . 'clases/class-correoargentino-domicilio.php';
		require_once plugin_dir_path(__FILE__) . 'clases/class-moto-flex.php';

	}

}