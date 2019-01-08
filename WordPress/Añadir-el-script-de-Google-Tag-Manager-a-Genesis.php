<?php
/*
Plugin Name: Añadir el script de Google Tag Manager a Genesis
Plugin URI: http://carlosmdh.es
Description: Plugin para insertar los Scripts de Google Tag Manager si tu WordPress esta hecho con Genesis Framework
Version: 1.0.0
Author: carlosmdh
License: GPL 2+
License URI:
*/

/* Añadir el código de Google Tag Manager en el <head>
*/

/* Debes sustituir  GTM-XXXXXXX con el identificador de tu contenedor de GTM que encontrarás en el apartado de “instalar Google Tag Manager de la sección “Contenedor” del Administrador de Google Tag Manager
*/


add_action( 'genesis_header', 'carlosmdh_google_tag_manager_genesis_1' );
function carlosmdh_google_tag_manager_genesis_1() { ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-XXXXXXX');</script>
	<!-- End Google Tag Manager -->
<?php }

/* Añadir el código noscript de Tag Manager justo antes de la apertura del <body>
*/

add_action( 'genesis_before', 'carlosmdh_google_tag_manager_genesis_2' );
function carlosmdh_google_tag_manager_genesis_2() { ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php }
