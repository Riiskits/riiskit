<?php
/**
 * Useful filters for popular plugins.
 *
 * @package		Riiskit
 * @subpackage	functions.php
 * @since		1.0.0
 */


/**
 * Move the Yoast SEO metabox to the bottom.
 *
 * You usually want your own custom fields to stay
 * above the Yoast metabox.
 *
 * @since 1.0.0
 */
add_filter( 'wpseo_metabox_prio', function() { return 'low'; } );
