<?php
/**
 * Twenty Twenty functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_child
 * @since Twenty Twenty 1.0
 */

/**
 * Table of Contents:
 * Custome css
 * Custome Js
 */

function styleandscript() {
    
	wp_enqueue_style( 'prent-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . './assets/css/style.css');

	wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . './assets/js/app.js', array ( 'jquery' ), 1.1, true);

}
add_action('wp_enqueue_scripts', 'styleandscript');


function get_civility(){
	$url = 'https://www.monaco.edu/inseecu/fr/api/form/demande-documentation';
	$result = file_get_contents($url);
	$result = json_decode($result, true);

	$civilitys = $result['fields'][8]['values'];
	echo '<select name="civilitys" class="input__select" id="civilitys" require>';
	echo '<option value="" disabled selected>Select</option>';
	foreach ($civilitys as $civility) {
		echo '<option value="'.$civility['value'].'">'.$civility['label'].'</option>';
	}
	echo '</select>';
}

function get_contry() {
	$url = 'https://www.monaco.edu/inseecu/fr/api/form/demande-documentation';
	$result = file_get_contents($url);
	$result = json_decode($result, true);

	$fieldsContry = $result['fields'][1]['values'];
	echo '<select name="country" class="input__select" id="country" require>';
	echo '<option value="" disabled selected>Select</option>';
	foreach ($fieldsContry as $Contry) {
		echo '<option value="'.$Contry['value'].'">'.$Contry['label'].'</option>';
	}
	echo '</select>';
}

function get_desiredProgram(){
	$url = 'https://www.monaco.edu/inseecu/fr/api/form/demande-documentation';
	$result = file_get_contents($url);
	$result = json_decode($result, true);

	$fieldsDesiredProgram = $result['fields'][2]['values'];
	echo '<select name="desiredProgram" class="input__select" id="desiredProgram" require>';
	echo '<option value="" disabled selected>Select</option>';
	foreach ($fieldsDesiredProgram as $DesiredProgram) {
		
		echo '<option value="'.$DesiredProgram['value'].'">'.$DesiredProgram['label'].'</option>';
	}
	echo '</select>';
}

function get__agreTermes(){
	$url = 'https://www.monaco.edu/inseecu/fr/api/form/demande-documentation';
	$result = file_get_contents($url);
	$result = json_decode($result, true);

	$fieldsAgreTermes = $result['fields'][0];
	echo '<input type="checkbox" name="agreTermes" id="agreTermes" require>';	
	echo '<label for="agreTermes">'.$fieldsAgreTermes['label'].'</label>';
}










