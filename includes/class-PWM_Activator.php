<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.kybernetik-services.com
 * @since      3.0
 *
 * @package    Hinjipwpm
 * @subpackage Hinjipwpm/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      3.0
 * @package    Hinjipwpm
 * @subpackage Hinjipwpm/includes
 * @author     Kybernetik Services <wordpress@kybernetik.com.de>
 */
class PWM_Activator {

	/**
	 * Do all neccessary activation tasks.
	 *
	 * @since    3.0
	 */
	public static function activate() {
		// store the flag into the db to trigger the display of a message after activation
		set_transient( 'purify_wp_menues', '1', 60 );

	}

}
