<?php

/**
 * Fired during plugin activation
 *
 * @link       https://https://avinash.wisdmlabs.net/
 * @since      1.0.0
 *
 * @package    Daily_Post_Mail
 * @subpackage Daily_Post_Mail/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Daily_Post_Mail
 * @subpackage Daily_Post_Mail/includes
 * @author     Avinash Jha <avinash.jha@wisdmlabs.com>
 */
class Daily_Post_Mail_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		
		if (!wp_next_scheduled('email_event')) {
			wp_schedule_event(strtotime('11:05'), 'hourly', 'email_event');
		  }
	}

}
