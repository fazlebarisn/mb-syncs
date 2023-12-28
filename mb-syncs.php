<?php
/**
 * Plugin Name:       MB Syncs
 * Description:       All synchronize menu will be here
 * Requires at least: 6.4.2
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Cansoft
 * Author URI:		  https://www.cansoft.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mb-syncs
 */

defined('ABSPATH') or die('Nice Try!');

if ( ! defined( 'MB_SYNCS_DIR_PATH' ) ) {
	define( 'MB_SYNCS_DIR_PATH', __DIR__ );
}

define( 'MB_SYNCS_FILE' , __FILE__ );
define( 'MB_SYNCS_URL' , plugins_url( '' , MB_SYNCS_FILE ) );
define( 'MB_SYNCS_BASENAME' , plugin_basename(__FILE__) );

require_once MB_SYNCS_DIR_PATH . '/functions.php';
require_once MB_SYNCS_DIR_PATH . '/inc/enqueue.php';