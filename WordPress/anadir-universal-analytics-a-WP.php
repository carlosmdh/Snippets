<?php
/*
Plugin Name: Insertar Universal Analytics en WordPress
Plugin URI: https://carlosmdh.es
Description: Plugin para insertar los Scripts de Universal Analytics
Version: 1.1.0
Author: carlosmdh
License: GPL 2+
License URI:https://carlosmdh.es
*/

// Añadir el código de Universaal Analytics en el <head>

add_action( 'wp_head', 'carlosmdh_universal_analytics' );

function carlosmdh_universal_analytics() { ?>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'INSERTA AQUI EL IDENTIFICADOR DE TU PROPIEDAD DE ANALYTICS', 'auto');
ga('set', 'anonymizeIp', true); //ESTA LINEA GARANTIZA QUE SE ANONIMIZA LA IP
ga('require','dnt');
  
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<?php }
