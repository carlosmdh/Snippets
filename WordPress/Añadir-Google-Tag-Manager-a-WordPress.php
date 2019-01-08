<?php
/*
Plugin Name: Insertar Google Tag Manager en WordPress
Plugin URI: http://carlosmdh.es
Description: Plugin para insertar los Scripts de Google Tag Manager
Version: 1.0.0
Author: carlosmdh
License: GPL 2+
License URI:
*/

// Añadir el código de Google Tag Manager en el <head>

add_action( 'wp_head', 'carlosmdh_google_tag_manager1' );

function carlosmdh_google_tag_manager1() { ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','INSERTA AQUI EL IDENTIFICADOR DE TU CONTENEDOR');</script>
	<!-- End Google Tag Manager -->

<?php }

// Añadir el código noscript de Google Tag Manager justo  debajo de la apertura de la etiqueta <body>

add_action( 'wp_footer', 'carlosmdh_google_tag_manager2' );

function carlosmdh_google_tag_manager2() { ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=INSERTA AQUI EL IDENTIFICADOR DE TU CONTENEDOR"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<?php }
