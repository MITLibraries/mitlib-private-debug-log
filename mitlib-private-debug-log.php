<?php
/**
 * Plugin Name: MITlib Private Debug Log
 * Description: Enable debug log to a private folder not accessible from the web
 * Version: 0.0.1
 * Author: MIT Libraries
 * Author URI: https://github.com/MITLibraries/mitlib-private-debug-log
 *
 * @package MITlib Private Debug Log
 * @author MIT Libraries
 * @link https://github.com/MITLibraries/mitlib-private-debug-log
 * @link https://gist.github.com/webaware/4969753
 */

/*
Original copyright (c) 2013 WebAware Pty Ltd (email : rmckay@webaware.com.au)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * For testing, define $debuglog to be something under the uplods directory.
 * Sample code:
 *
 * $debuglog = WP_CONTENT_DIR . '/uploads';
 *
 * For production use, define $debuglog to be somewhere outside the web root.
 */
$debuglog = '/var/log/httpd';

ini_set( 'log_errors', 1 );
ini_set( 'error_log', $debuglog . '/debug.log' );
