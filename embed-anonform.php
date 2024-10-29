<?php
/**
 * Plugin Name:			ANON::form embedded secure form
 * Plugin URI:			https://anonform.com
 * Description:			ANON::form iframe shortcode ([anonform link='path to form']) embedded secure web form. Note! You must have a working account at ANON::form.
 * Version:				1.3
 * Requires at least:	5.0
 * Requires PHP:		5.6
 * Author:				Erik Schütten
 * License:				GPLv2 or later
 * License URI:			https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || exit;

function anon_embed_anonform($atts) {
	$default = array('link' => '#');
	$a = shortcode_atts($default, $atts);
	return '<iframe id="anonform-app" src="'.$a['link'].'" title="Embedded ANON::form"></iframe><script>!function(){var e=document.getElementById("anonform-app");var n=window.addEventListener?"addEventListener":"attachEvent";(0,window[n])("attachEvent"==n?"onmessage":"message",function(n){var t,a=n[n.message?"message":"data"];t=a,e.style.height=t+"px"},!1),window.onresize=function(){e.contentWindow.postMessage("parentWindowResized","*")}}();</script>';
}
add_shortcode('anonform', 'anon_embed_anonform');

function anon_embed_anonform_styles() {
	wp_enqueue_style('embed-anonform-css', plugin_dir_url(__FILE__).'css/embed-anonform.css');                      
}
add_action('wp_enqueue_scripts', 'anon_embed_anonform_styles');
