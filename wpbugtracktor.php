<?php
/*
Plugin Name: IDB Bug Tracker
Plugin URI: http://indiedevbundle.com/app/idb-ultimate-wordpress-bundle/#idbbugtracker
Description: IDB Bug Tracker is a free, open source, and full featured bug tracking and issue management system built atop of Wordpress.
Version: 0.9.13
Author: IndieDevBundle.com
Author URI: http://indiedevbundle.com/app/idb-ultimate-wordpress-bundle/#idbbugtracker
License: LGPL
Text Domain: wpbugtracktor
*/

/*  
Copyright 2012, 2013, 2014, 2015 Jeff Quindlen  (email : blacklodgegames@gmail.com)

This library is free software; you can redistribute it and/or modify it under the terms 
of the GNU Lesser General Public License as published by the Free Software Foundation; 
either version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with this 
library; if not, write to the Free Software Foundation, Inc., 59 Temple Place, Suite 330, 
Boston, MA 02111-1307 USA 
*/

/**
 * IDB Bug Tracker (formerly wpBugTracktor)
 *
 */
global $wpscbt_version, $wpscbt_version_int, $wpBugTracktorSettings;

/* Global variables: */
$wpscbt_version = '0.9.13';
$wpscbt_version_int = 009013; // Mm_p__ which is 1 digit for Major, 2 for minor, and 3 digits for patch updates, so version 2.0.14 would be 200014

if(session_id() == '') {
    session_start();
}

/**
 * Sets up wpBugTracktor to use multiple languages
 */
function wpBugTracktorLanguageInit() {
    load_plugin_textdomain( 'wpbugtracktor', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action('init', 'wpBugTracktorLanguageInit');

require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/installer/installer.php'); 
register_activation_hook(__FILE__, 'wpscbtInstall'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/actions/actions.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/settings/settings.php'); 
$wpBugTracktorSettings = new wpBugTracktorSettings(); // Initialize settings.  On the first run, this will set options
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/projects/projects.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/milestones/milestones.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/issues/issues.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/admin/admin.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/admin/adminpages.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/admin/adminajax.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/admin/publicajax.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/widgets/widgets.php'); 
require_once(WP_PLUGIN_DIR . '/wpbugtracktor/php/shortcodes/shortcodes.php'); 
wpBugTracktorAssignCapabilities();

?>