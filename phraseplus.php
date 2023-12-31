<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.urasaapi.com/about
 * @since             1.0.0
 * @package           Phraseplus
 *
 * @wordpress-plugin
 * Plugin Name:       phrase plus
 * Plugin URI:        https://www.urasaapi.com
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Asad ur Rehman
 * Author URI:        https://www.urasaapi.com/about
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       phraseplus
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PHRASEPLUS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-phraseplus-activator.php
 */
function activate_phraseplus() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-phraseplus-activator.php';
	Phraseplus_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-phraseplus-deactivator.php
 */
function deactivate_phraseplus() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-phraseplus-deactivator.php';
	Phraseplus_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_phraseplus' );
register_deactivation_hook( __FILE__, 'deactivate_phraseplus' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-phraseplus.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_phraseplus() {

	$plugin = new Phraseplus();
	$plugin->run();

}
run_phraseplus();
