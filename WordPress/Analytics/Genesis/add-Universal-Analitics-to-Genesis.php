<?php
/*
Plugin Name: Insertar Universal Analytics en WordPress
Plugin URI: https://carlosmdh.es
Description: Plugin para insertar los Scripts de Universal Analytics en WordPress
Version: 1.1.0
Author: carlosmdh
License: GPL 2+
License URI:https://carlosmdh.es
*/

// Añadir el código de Universal Analytics en el <head>

/* Debes sustituir  UA-XXXXXXXXX-Y con el identificador de tu prpiedad de Google Analytics que encontrarás en el apartado de "Administrar ==> Código de seguimiento ==> ID de seguimiento. Este identificador debe ir entrecomillado con comillas simples (las de la tecla de ?), es decir 'UA-XXXXXXXXX-Y'
*/


add_action( 'genesis_header', 'carlosmdh_global_analytics' );

function carlosmdh_global_analytics() { ?>

<!-- Google Analytics -->

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXXXXXX-Y', 'auto');
ga('set', 'anonymizeIp', true); /* ESTA LINEA GARANTIZA QUE SE ANONIMIZA LA IP */
  
ga('send', 'pageview');
</script>

<!-- End Google Analytics -->

<?php }
