<?php

function adminEnqueue(){

    // Enqueue jquery from WordPress core
	wp_enqueue_script( 'jquery' );

    // Plugin assets
    wp_enqueue_style('mb-syncs-admin', MB_SYNCS_URL . '/assets/css/admin.css');
    wp_enqueue_script('mb-syncs-admin', MB_SYNCS_URL. '/assets/js/admin.js');
}
add_action( 'admin_enqueue_scripts', 'adminEnqueue' );