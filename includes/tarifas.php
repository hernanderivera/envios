<?php
 
if ( ! defined( 'WPINC' ) ) {die;}
if ( ! defined( 'ABSPATH' ) ) {exit;}

////////////////////////////// ENVÍO GRATIS DESDE ////////////////////

$envioGratis = 2000;


////////////////////////////// TARIFAS A DOMICILIO REGIONAL	////////////////////
$domicilioTarifaRegional = array(
	1 => 340,
	3 => 345,
	5 => 385,
	10 => 480,
	15 => 565,
	20 => 645,
	25 => 780,
	30 => 905,
	'adicional' => 53
);	
////////////////////////////// TARIFAS A DOMICILIO NACIONAL	////////////////////
$domicilioTarifaNacional = array(
	1 => 380,
	3 => 445,
	5 => 480,
	10 => 615,
	15 => 780,
	20 => 985,
	25 => 1210,
	30 => 1515,
	'adicional' => 68
);
////////////////////////////// TARIFAS A SUCURSAL REGIONAL	////////////////////
$sucursalTarifaRegional = array(
	1 => 230,
	3 => 255,
	5 => 300,
	10 => 385,
	15 => 495,
	20 => 560,
	25 => 690,
	30 => 845,
	'adicional' => 53
);	
////////////////////////////// TARIFAS A SUCURSAL NACIONAL	////////////////////
$sucursalTarifaNacional = array(
	1 => 245,
	3 => 295,
	5 => 340,
	10 => 475,
	15 => 645,
	20 => 855,
	25 => 1110,
	30 => 1360,
	'adicional' => 68
);
////////////////////////////// TARIFAS FEX	////////////////////
$tarifaFlex = array(
	0 => 210,
	1 => 300,
	2 => 460
);	

