<?php
/*
Plugin Name: Insertar Global Analytics en WordPress
Plugin URI: https://carlosmdh.es
Description: Plugin para insertar los Scripts de Global Analytics
Version: 1.0.1
Author: carlosmdh
License: GPL 2+
License URI:https://carlosmdh.es
*/

// Añadir el código de Global Analytics en el <head>

add_action( 'wp_head', 'carlosmdh_global_analytics' );

function carlosmdh_global_analytics() { ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=INSERTA AQUI EL IDENTIFICADOR DE TU PROPIEDAD DE ANALYTICS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  
  gtag('config', 'INSERTA AQUI EL IDENTIFICADOR DE TU PROPIEDAD DE ANALYTICS', { 'anonymize_ip': true });
</script>
<!--End Global site tag (gtag.js) - Google Analytics -->

<?php }




