<?php 
    wp_enqueue_style( 'common', get_template_directory_uri() . '/dist/styles/common.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );