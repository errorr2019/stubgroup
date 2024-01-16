<?php

function dt_enqueue_styles() {

	wp_enqueue_style( 'divi-style', get_template_directory_uri() . '/style.css', );
	wp_enqueue_style('custom-style',get_stylesheet_directory_uri(). '/css/custom.css',
	array() , time());
}
add_action( 'wp_enqueue_scripts', 'dt_enqueue_styles' );


// hooks

function copyright_notice(){
	echo "my name is sidra zehra ";
}
  
add_action('wp_head' , 'copyright_notice');


// function my_added_page_content ($content){
// 	if(is_page()){
// 		return $content . '<p>test</p>';
// 	}
// }
// add_filter('the_content','my_added_page_content');





