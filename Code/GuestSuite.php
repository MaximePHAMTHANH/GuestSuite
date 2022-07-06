<?php
/*
Plugin Name: GuestSuite
Plugin URI: 
Description: GuestSuite
Author: Maxime Pham Thanh
Author URI: 
Version: 1.0
*/

if (!defined('ABSPATH') ){
	die;
}

include 'Main.php';


class GuestSuitePluging{

	function __construct(){
		add_action('admin_menu',array($this,'GuestSuiteMenu'));
	}

	function GuestSuiteMenu(){
		add_menu_page('Forms','GuestSuite','manage_options','GuestSuiteMenu',array($this,'GuestSuiteMenu_main'),'dashicons-awards',4);
	}

	function GuestSuiteMenu_main(){
		echo "
		<div><h1>GuestSuite Plugin</h1></div>

		<div><h3>Pour définir le shortcode, utiliser la syntaxe suivante :</h3></div>

		<div><h4>[GuestSuite id='' token='' type='' color='']</h4></div>
		<div><h4>Valeurs par défaut : [GuestSuite id='32620' token='********' type='header' color='#FFBB00']</h4></div>
		<div><h4>id : l'identifiant de l'établissement</h4></div>
		<div><h4>token : la clé API fournie par GuestSuite</h4></div>
		<div><h4>type : 'header' ou 'footer' (le type 'debug' renvoie juste les infos récupérées sans mise en page)</h4></div>
		<div><h4>color : la couleur des éléments</h4></div>

		<div><h3>Classes CSS disponibles :</h3></div>
		<div><h4>.Footer_Rate</h4></div>
		<div><h4>.Header_Rate</h4></div>
		<div><h4>.Footer_Reviews</h4></div>
		<div><h4>.GuestSuite_Star_footer (utiliser la propriété fill pour changer la couleur)</h4></div>
		<div><h4>.GuestSuite_Star_header (utiliser la propriété fill pour changer la couleur)</h4></div>
		<div><h4>Pour certaines propriétés CSS il peut être nécessaire d'ajouter la balise !important pour forcer l'écrasement de l'ancienne propriété.</h4></div>
		";
	}


}


if (class_exists('GuestSuitePluging')){
	$GuestSuite = new GuestSuitePluging();
}

