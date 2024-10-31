<?php
/**
 * The plugin bootstrap file
 *
 * @link              https://www.kybernetik-services.com
 * @since             3.0
 * @package           Hinjipwpm
 *
 * @wordpress-plugin
 * Plugin Name:       Purify WordPress Menus
 * Plugin URI:        https://wordpress.org/plugins/purify-wp-menues/
 * Description:       Slim down the HTML code of WordPress menus to only the CSS classes and ID attributes your theme needs to improve page speed
 * Version:           3.5.0
 * Requires at least: 4.6
 * Requires PHP:      5.2
 * Author:            Kybernetik Services
 * Author URI:        https://www.kybernetik-services.com/?utm_source=wordpress_org&utm_medium=plugin&utm_campaign=purify-wp-menues&utm_content=author
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       purify-wp-menues
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PWM_ROOT', plugin_dir_path( __FILE__ ) );
define( 'PWM_DIR_URL', plugin_dir_url( __FILE__ ) );

function pwm_autoloader( $class_name )
{
    if ( false !== strpos( $class_name, 'PWM_' ) ) {
        include PWM_ROOT . 'includes/class-' . $class_name . '.php';
    }
}
spl_autoload_register('pwm_autoloader');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hinjipwpm-activator.php
 */
function activate_hinjipwpm() {
	PWM_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hinjipwpm-deactivator.php
 */
function deactivate_hinjipwpm() {
	PWM_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hinjipwpm' );
register_deactivation_hook( __FILE__, 'deactivate_hinjipwpm' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    3.0
 */
function run_hinjipwpm() {

	$plugin = new PWM_Default();
	$plugin->run();

}
run_hinjipwpm();
