<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний

function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
}
function head (){
	include "head.php";
}
function body_start (){
	include "body-start.php";
}
function main_user (){
	include "main.php";
}

function body_end () {
	 include "body-end.php";
}
function html_end (){
	include "html-end.php";
}
function tag_open($name_tag){
	echo '<'.$name_tag.'>';
}
function tag_close($name_tag){
	echo '</'.$name_tag.'>';
}
function tag($name_tag){
	$tag = tag_open($name_tag).tag_close($name_tag);
	echo $tag;
}


?>