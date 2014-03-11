<?php
/*
Plugin Name: wpBugTracktor - Bug & Issue Tracker - BETA
Plugin URI: http://wpbugtracktor.com
Description: <a href="http://wpbugtracktor.com" target="blank">wpBugTracktor</a> is a free, open source, and full featured bug tracking and issue management system built atop of Wordpress.
Version: 0.9.2
Author: wpStoreCart, LLC
Author URI: http://wpbugtracktor.com
License: LGPL
Text Domain: wpbugtracktor
*/

/*  
Copyright 2012, 2013, 2014 wpStoreCart, LLC  (email : admin@wpstorecart.com)

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
 * wpBugTracktor
 *
 * @package wpBugTracktor
 * @version 0.9.2
 * @author wpStoreCart, LLC <admin@wpstorecart.com>
 * @copyright Copyright &copy; 2012, 2013, 2014 wpStoreCart, LLC.  All rights reserved.
 * @link http://wpbugtracktor.com
 */
global $wpscbt_version, $wpscbt_version_int, $wpBugTracktorSettings;

/* Global variables: */
$wpscbt_version = '0.9.2';
$wpscbt_version_int = 009002; // Mm_p__ which is 1 digit for Major, 2 for minor, and 3 digits for patch updates, so version 2.0.14 would be 200014

if(session_id() == '') {
    session_start();
}

require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/installer/installer.php'); 
register_activation_hook(__FILE__, 'wpscbtInstall'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/actions/actions.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/settings/settings.php'); 
$wpBugTracktorSettings = new wpBugTracktorSettings(); // Initialize settings.  One the first run, this will set options
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/projects/projects.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/milestones/milestones.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/issues/issues.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/admin/admin.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/admin/adminpages.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/admin/adminajax.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/admin/publicajax.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/widgets/widgets.php'); 
require_once(WP_PLUGIN_DIR . '/wp-bug-tracktor/php/shortcodes/shortcodes.php'); 
wpBugTracktorAssignCapabilities();
?>