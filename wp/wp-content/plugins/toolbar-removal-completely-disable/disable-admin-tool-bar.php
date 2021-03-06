<?php 
/*
Plugin Name: Disable Admin Bar Toolbar
Plugin URI: https://slangji.wordpress.com/toolbar-removal-completely-disable/
Description: Disable WordPress 3.1+ Admin Bar or 3.3+ Toolbar frontend and backend for all Administrators and Users Roles Profiles (2013-06-15) with new universal unified coding that work with WP 3.1+ to 3.7+ This is only a basic disabler: for full remover, compatibility with WP 3.8+ or greater, admin control panel speedup, and memory optimizer, refer to <a href="https://wordpress.org/plugins/wp-admin-bar-removal/">WP Admin Bar Removal</a> or <a href="https://wordpress.org/plugins/wp-toolbar-removal/">WP Toolbar Removal</a> plugins. The configuration is Automatic and this plugin is No Logo!
Author: sLaNGjIs
Author URI: https://slangji.wordpress.com/plugins/
Requires at least: 3.1
Tested up to: 3.7
Version: 2013.0615.2016.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
 *
 * Approved 2012-3-2
 * Build 2016-01-04
 * Donate link https://slangji.wordpress.com/donate/
 * Indentation GNU style coding standard
 * Indentation URI https://www.gnu.org/prep/standards/standards.html
 * Humans We are the humans behind
 * Humans URI https://humanstxt.org/Standard.html
 *
 * LICENSING - license.txt
 *
 * [WP Disable Admin Bar and Toolbar](https://wordpress.org/plugins/toolbar-removal-completely-disable/)
 *
 * Disable (basic) WordPress 3.1+ Admin Bar and 3.3+ Toolbar on frontend and backend
 *
 * Copyright (C) 2011-2016 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](https://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * on an "AS IS", but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](https://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * This program is distributed "AS IS" in the hope that it will be useful, but:
 * without any warranty of function, without any warranty of merchantability,
 * without any fitness for a particular or specific purpose, without any type
 * of future assistance from your own author or other authors.
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](https://www.gnu.org/licenses/gpl-2.0.html)
 * and as license.txt into this plugin package.
 *
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from:
 *
 * wp-header-footer-login-log.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2015 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-admin-bar-removal.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2010-2015 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-admin-bar-removal-node-addon.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2010-2015 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * one-click-logout-barless.php by olyma <olyma [at] rack of power [dot] com>)
 * Copyright (C) 2013-2015 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 * Copyright (C) 2011-2012 [olyma](https://rackofpower.com/) (email: <olyma [at] rack of power [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-login-log.php uses (or it parts) code derived from:
 *
 * wp-header-log.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2008 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-footer-log.php by sLaNGjIs <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2007 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright
 * belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2007-2015 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 * Copyright (C) 2011-2012 [olyma](https://rackofpower.com/) (email: <olyma [at] rack of power [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](https://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](https://wordpress.org/plugins/about/guidelines/)
 * paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * CODING
 *
 * This software implement [GNU style](https://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to
 * WordPress [Readme Validator](https://wordpress.org/plugins/about/validator/) directives.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * HUMANS - humans.txt
 *
 * We are the Humans behind this project [humanstxt.org](https://humanstxt.org/Standard.html)
 *
 * This software meet detailed humans rights belongs to your own author and to their respective other authors.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * NOTATION
 *
 * Please noted that for Completely Backend Removal is needed:
 * On WordPress 3.1+ (or later) [WP Admin Bar Removal](https://wordpress.org/plugins/wp-admin-bar-removal/)
 * On WordPress 3.3+ (or later) [WP Toolbar Removal](https://wordpress.org/plugins/wp-toolbar-removal/)
 * Try also your Add-On [WP Admin Bar Removal Node](https://wordpress.org/plugins/wp-admin-bar-node-removal/)
 * Try also your Add-On [WP Toolbar Removal Node](https://wordpress.org/plugins/wp-toolbar-node-removal/)
 *
 * THANKS
 *
 * [storkontheroof](https://wordpress.org/support/topic/not-working-for-me-14#post-3990523)
 * [focus3d](https://wordpress.org/support/topic/date-in-french#post-4380604)
 *
 * TODOLIST
 *
 * [to-do list and changelog](https://wordpress.org/plugins/toolbar-removal-completely-disable/changelog/)
 */

	/**
	 * @package     Disable Admin Bar Toolbar
	 * @subpackage  WordPress PlugIn
	 * @description Disable (basic) WordPress 3.1+ Admin Bar and 3.3+ Toolbar on frontend and backend
	 * @install     The configuration is Automatic!
	 * @trademark   This plugin is NoLogo
	 * @since       3.1+
	 * @tested      3.7+
	 * @branche     2013
	 * @version     2013.0615.2016.0
	 * @build       2016-01-04 - 2015-09-10 - 1ST 2013-06-15
	 * @status      STABLE
	 * @development Code in Becoming!
	 * @author      slangjis
	 * @license     GPLv2 or later
	 * @indentation GNU style coding standard
	 */

	defined( 'ABSPATH' ) OR exit;

	defined( 'WPINC' ) OR exit;

	if ( ! function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit;
		}

	global $wp_version;

	if ( $wp_version < 3.1 )
		{
			wp_die( __( 'This plugin requires WordPress 3.1+ or greater: Activation Stopped.' ) );
				exit;
		}

	function wptrcd_1st()
		{
			if ( ! current_user_can( 'activate_plugins' ) )
				return;

			$wp_path_to_this_file = preg_replace( '/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR . "/$2", __FILE__ );
			$this_plugin          = plugin_basename( trim( $wp_path_to_this_file ) );
			$active_plugins       = get_option( 'active_plugins' );
			$this_plugin_key      = array_search( $this_plugin, $active_plugins );

			if ( $this_plugin_key )
				{
					array_splice( $active_plugins, $this_plugin_key, 1 );
					array_unshift( $active_plugins, $this_plugin );
					update_option( 'active_plugins', $active_plugins );
				}
		}
	add_action( 'activated_plugin', 'wptrcd_1st', 0 );

	function wptrcd_rbf28px()
		{
			echo "\n\n<!--Start Plugin WP Disable Admin Bar and Toolbar Code-->\n\n";
			echo '<style type="text/css">html.wp-toolbar,html.wp-toolbar #wpcontent,html.wp-toolbar #adminmenu,html.wp-toolbar #wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';
			echo "\n\n<!--End Plugin WP Disable Admin Bar and Toolbar Code-->\n\n";
		}
	add_action( 'admin_print_styles', 'wptrcd_rbf28px', 21 );

	function wptrcd_atblh()
		{
			echo "\n\n<!--Start Plugin WP Disable Admin Bar and Toolbar Code-->\n\n";
?>
<style type="text/css">table#tbrcss td#tbrcss_ttl a:link,table#tbrcss td#tbrcss_ttl a:visited{text-decoration:none}table#tbrcss td#tbrcss_lgt,table#tbrcss td#tbrcss_lgt a{text-decoration:none}</style>
<table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="tbrcss" border="0" cols="4" width="97%" height="33">
<tr>
<td align="left" valign="center" id="tbrcss_ttl">
<?php 

	echo '<a href="' . home_url() . '">' . __( get_bloginfo() ) . '</a>';
?>
</td>
<td align="right" valign="center" id="tbrcss_lgt">
<div style="padding-top:2px">
<?php 

	echo date_i18n( get_option( 'date_format' ) );
?>
 @ 
<?php 

	echo date_i18n( get_option( 'time_format' ) );
?>
<?php 

	wp_get_current_user();

	$current_user = wp_get_current_user();

	if ( ! ( $current_user instanceof WP_User ) )
		return;

	echo ' | ' . $current_user->display_name . '';

	if ( is_multisite() && is_super_admin() )
		{
			if ( ! is_network_admin() )
				{
					echo ' | <a href="' . network_admin_url() . '">' . __( 'Network Admin' ) . '</a>';
				}
			else
				{
					echo ' | <a href="' . get_DashBoard_url( get_current_user_id() ) . '">' . __( 'Site Admin' ) . '</a>';
				}
		}

	echo ' | <a href="' . wp_logout_url( home_url() ) . '">' . __( 'Log Out' ) . '</a>';
?>
</div>
</td>
<td width="8">
</td>
</tr>
</table>
<?php 
			echo "\n<!--End Plugin WP Disable Admin Bar and Toolbar Code-->\n\n";
		}

	if ( $wp_version >= 3.3 )
		{
			add_action( 'in_admin_header', 'wptrcd_atblh' );
			add_filter( 'show_wp_pointer_admin_bar', '__return_false' );
		}

	function wptrcd_init()
		{
			add_filter( 'show_admin_bar', '__return_false' );
			add_filter( 'wp_admin_bar_class', '__return_false' );
		}
	add_filter( 'init', 'wptrcd_init', 9 );

	function wptrcd_ruppoabpc()
		{
			echo "\n\n<!--Start Plugin WP Disable Admin Bar and Toolbar Code-->\n\n";
			echo '<style type="text/css">.show-admin-bar{display:none}</style>';
			echo "\n\n<!--End Plugin WP Disable Admin Bar and Toolbar Code-->\n\n";
		}
	add_action( 'admin_print_styles-profile.php', 'wptrcd_ruppoabpc', 0 );

	function wptrcd_prml( $links, $file )
		{
			if ( ! is_admin() && ! current_user_can( 'administrator' ) )
				return;

			if ( $file == plugin_basename( __FILE__ ) )
				{
					$links[] = '<a href="https://slangji.wordpress.com/donate/">Donate</a>';
					$links[] = '<a href="https://slangji.wordpress.com/contact/">Contact</a>';
				}
			return $links;
		}
	add_filter( 'plugin_row_meta', 'wptrcd_prml', 10, 2 );

	function wptrcd_hfl()
		{
			if ( ! is_home() && ! is_front_page() )
				return;

			echo "\n<!--Plugin WP Disable Admin Bar and Toolbar Active - Secured with Genuine Authenticity KeyTag-->\n";

			global $wp_version;

			if ( $wp_version >= 3.1 )
				{
					if ( $wp_version < 3.3 )
						{
							echo "\n<!-- Site Admin Control Panel and Frontend Users Experience Enhanced with Disabled Admin Bar -->\n\n";
						}

					if ( $wp_version >= 3.3 )
						{
							echo "\n<!--  Site Admin Control Panel and Frontend Users Experience Enhanced with Disabled Toolbar  -->\n\n";
						}
				}
		}
	add_action( 'wp_head', 'wptrcd_hfl', 0 );
	add_action( 'wp_footer', 'wptrcd_hfl', 0 );
?>