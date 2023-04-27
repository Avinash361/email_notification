<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://https://avinash.wisdmlabs.net/
 * @since      1.0.0
 *
 * @package    Daily_Post_Mail
 * @subpackage Daily_Post_Mail/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Daily_Post_Mail
 * @subpackage Daily_Post_Mail/includes
 * @author     Avinash Jha <avinash.jha@wisdmlabs.com>
 */
class Daily_Post_Mail_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		wp_clear_scheduled_hook('email_event');
	}

}
