<?php
 
if ( ! defined( 'WPINC' ) ) {die;}
if ( ! defined( 'ABSPATH' ) ) {exit;}

////////////////////////////// ENVÍO GRATIS DESDE ////////////////////

$envioGratis = 200000;


////////////////////////////// TARIFAS A DOMICILIO REGIONAL ////////////////////
$domicilioTarifaRegional = array(
	1 => 9500,
	5 => 10600,
	10 => 13400,
	15 => 15900,
	20 => 18100,
	25 => 21400,
	'adicional' => 60
);

////////////////////////////// TARIFAS A DOMICILIO NACIONAL ////////////////////
$domicilioTarifaNacional = array(
	1 => 11500,
	5 => 13400,
	10 => 17900,
	15 => 21800,
	20 => 25000,
	25 => 30100,
	'adicional' => 75
);

////////////////////////////// TARIFAS A SUCURSAL REGIONAL ////////////////////
$sucursalTarifaRegional = array(
    1 => $domicilioTarifaRegional[1] * 0.95,
    5 => $domicilioTarifaRegional[5] * 0.95,
    10 => $domicilioTarifaRegional[10] * 0.95,
    15 => $domicilioTarifaRegional[15] * 0.95,
    20 => $domicilioTarifaRegional[20] * 0.95,
    25 => $domicilioTarifaRegional[25] * 0.95,
    'adicional' => $domicilioTarifaRegional['adicional'] * 0.95
);
////////////////////////////// TARIFAS A SUCURSAL NACIONAL ////////////////////
$sucursalTarifaNacional = array(
    1 => $domicilioTarifaNacional[1] * 0.95,
    5 => $domicilioTarifaNacional[5] * 0.95,
    10 => $domicilioTarifaNacional[10] * 0.95,
    15 => $domicilioTarifaNacional[15] * 0.95,
    20 => $domicilioTarifaNacional[20] * 0.95,
    25 => $domicilioTarifaNacional[25] * 0.95,
    'adicional' => $domicilioTarifaNacional['adicional'] * 0.95
);
////////////////////////////// TARIFAS FEX	////////////////////
$tarifaFlex = array(
	0 => 5000,
	1 => 9000,
	2 => 12000
);	

