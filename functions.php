<?php 

add_theme_support('post-thumbnails');

function cadastrando_post_type_imoveis() {
	// https://codex.wordpress.org/Function_Reference/register_post_type
$nomeSingular ='Imóvel';
$nomePlural ='Imóveis';
$description = 'Imóveis da imobiliária Malura';

$labels = array(
	'name' => $nomePlural,
	'name_singular' => $nomeSingular,
	'add_new_item' => 'Adicionar novo ' . $nomeSingular,
	'edit_item' => 'Editar ' . $nomeSingular
	);
$supports = array(
	'title',
	'editor',
	'thumbnail'
	);


$args = array(
	'labels' => $labels,
	'public' => true,
	'description' => $description,
	// https://developer.wordpress.org/resource/dashicons/#image-rotate-right
	'menu_icon' => 'dashicons-admin-home',
	'supports' => $supports

	);
register_post_type( 'imovel', $args );
}
add_action('init','cadastrando_post_type_imoveis');

function registrar_menu_navegacao() {
register_nav_menu('header-menu','main-menu');
}
add_action('init', 'registrar_menu_navegacao');

function geraTitle() {
				bloginfo('name');
				if ( !is_home()) echo ' | ';  
				the_title(); 
			}