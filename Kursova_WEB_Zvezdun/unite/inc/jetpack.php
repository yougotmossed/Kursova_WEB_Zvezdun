<?php
// Leonid Zvezdun UP-211 Kursova robota WEB
function unite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'type' => 'click', 
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'unite_jetpack_setup' );
