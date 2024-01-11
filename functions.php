<?php
/**
 * Add main admin page
 */
function adminMenu(){
    add_menu_page( __('MB Sync' , 'mb-syncs' ) , __('MB Sync' , 'mb-syncs') , 'manage_options' , 'mb_syncs' , 'adminPage' , 'dashicons-admin-generic', 55 );
}
add_action( 'admin_menu', 'adminMenu');

/**
 * Includ the deshboard.php file
 * All html will be there 
 */
function adminPage(){
    require_once MB_SYNCS_DIR_PATH.'/inc/dashboard.php';
}