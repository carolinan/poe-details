<?php
/**
 * Plugin Name:       poe details
 * Description:       A details block for fullsiteediting.com.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       poe-details
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function poe_details_register_blocks() {
	register_block_type( __DIR__ . '/build/details' );
	register_block_type( __DIR__ . '/build/details-summary' );
	register_block_type( __DIR__ . '/build/details-content' );
}
add_action( 'init', 'poe_details_register_blocks' );

function poe_details_activation() {
	poe_details_register_blocks();
}
register_activation_hook( __FILE__, 'poe_details_activation' );
