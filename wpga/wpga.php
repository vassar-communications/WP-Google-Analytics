<?php
/*
Plugin Name: WP Google Analytics
Plugin URI: https://www.vassar.edu
Description: Adds our Google Analytics code to WP
Author: Chris Silverman
Version: 1.0
Author URI: https://csilverman.com
*/

if (! defined('ABSPATH')) {
    exit;
}

function custom_content_after_head_open_tag()
{
    $tmp = <<<TMP
<!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-301357-5"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());
 gtag('config', 'UA-301357-5');
</script>
-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WCS4M7');</script>
<!-- End Google Tag Manager -->
TMP;
    echo $tmp;
}

add_action('wp_head', 'custom_content_after_head_open_tag', -1);



function custom_content_after_body_open_tag()
{
    $tmp = <<<TMP
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCS4M7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
TMP;
    echo $tmp;
}

add_action('wp_body_open', 'custom_content_after_body_open_tag', 0);
