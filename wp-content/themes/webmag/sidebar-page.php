<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webmag
 */

if ( ! is_active_sidebar( 'sidebar-page' ) ) {
	return;
}

dynamic_sidebar( 'sidebar-page' );
