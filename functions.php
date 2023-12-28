<?php
/**
 * Only for developer
 * @author Fazle Bari
 */
if( ! function_exists('dd') ){
    function dd( ...$vals){
        if( ! empty($vals) && is_array($vals) ){
            ob_start(); // Start output buffering
            foreach($vals as $val ){
                echo "<pre>";
                    var_dump($val);
                echo "</pre>";
            }
            $output = ob_get_clean(); // Get the buffered output and clear the buffer
            echo $output; // Output the buffered content
        }
    }
}

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