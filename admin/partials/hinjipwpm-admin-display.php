<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.kybernetik-services.com
 * @since      3.0
 *
 * @package    Hinjipwpm
 * @subpackage Hinjipwpm/admin/partials
 */
?>

<div class="wrap">

	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
	<p><?php esc_html_e( 'Slim down the HTML code of WordPress menus to only the CSS classes and ID attributes your theme needs to improve page speed', 'purify-wp-menues' ); ?>.</p>
	<p><?php esc_html_e( 'Your custom CSS classes as given in the menu settings at each menu item stay untouched.', 'purify-wp-menues' ); ?>.</p>
<div class="th_wrapper">
	<div id="th_main">
		<div class="th_content">
			<form method="post" action="options.php">
<?php 
settings_fields( $this->settings_fields_slug );
do_settings_sections( $this->main_options_page_slug );
submit_button(); 
?>
			</form>
			</div><!-- .th_content -->
		</div><!-- #th_main -->
		<div id="th_footer">
			<div class="th_content">
				<h2><?php esc_html_e( 'Credits and informations', 'purify-wp-menues' ); ?></h2>
				<dl>
					<dt><?php esc_html_e( 'Do you like the plugin?', 'purify-wp-menues' ); ?></dt><dd><a href="http://wordpress.org/support/view/plugin-reviews/purify-wp-menues"><?php esc_html_e( 'Rate it at wordpress.org!', 'purify-wp-menues' ); ?></a></dd>
					<dt><?php esc_html_e( 'Do you need support or have an idea for the plugin?', 'purify-wp-menues' ); ?></dt><dd><a href="http://wordpress.org/support/plugin/purify-wp-menues"><?php esc_html_e( 'Post your questions and ideas about Purify WordPress Menus in the forum at wordpress.org!', 'purify-wp-menues' ); ?></a></dd>
				</dl>
			</div><!-- .th_content -->
		</div><!-- #th_footer -->
	</div><!-- .th_wrapper -->
</div><!-- .wrap -->
