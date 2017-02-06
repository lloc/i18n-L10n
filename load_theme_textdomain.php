<?php

function mein_theme_load_theme_textdomain() {
	load_theme_textdomain( 'mein-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'mein_theme_load_theme_textdomain' );