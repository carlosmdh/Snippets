<?php
/*
Plugin Name: Insertar Global Analytics en WordPress
Plugin URI: https://carlosmdh.es
Description: Plugin para insertar los Scripts de Universal Analytics en WordPress
Version: 1.1.0
Author: carlosmdh
License: GPL 2+
License URI:https://carlosmdh.es
*/

// Añadir el código de Global Analytics en el <head>

/* Debes sustituir  UA-XXXXXXXXX-Y con el identificador de tu prpiedad de Google Analytics que encontrarás en el apartado de "Administrar ==> Código de seguimiento ==> ID de seguimiento. Este identificador debe ir entrecomillado con comillas simples (las de la tecla de ?), es decir 'UA-XXXXXXXXX-Y'
	
El parámetro { 'anonymize_ip': true } convierte la IP en aanñonima al enviarla a Google
*/


add_action( 'wp_head', 'carlosmdh_universal_analytics' );

function carlosmdh_universal_analytics() { ?>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-Y"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXXXXX-Y', { 'anonymize_ip': true } );
  
</script>

<!-- End Google Analytics -->

<?php }
