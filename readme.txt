=== IDB Bug Tracker ===
Contributors: jquindlen
Donate link: http://indiedevbundle.com/app/idb-ultimate-wordpress-bundle/#idbbugtracker
Tags: bug,track,bug tracker,issue,bugs,issues,projects,feature request,tracker,wpBugTracktor,idbbugtracker
Requires at least: 3.5.0
Tested up to: 4.2
Stable tag: 0.9.12

The best native bug tracking and issue management system for Wordpress.

== Description ==

[IDB Bug Tracker](http://indiedevbundle.com/app/idb-ultimate-wordpress-bundle/#idbbugtracker "IDB Bug Tracker") (formerly wpBugTracktor) is a free, open source, and full featured bug tracking and issue management system built atop of Wordpress.

It uses Wordpress pages, which keeps end users out of the dashboard area and allows you to use other comment plugins and solutions with this bug tracker.  Keep your bug tracker private, allow only certain users, all users, or even guests to report bugs.  Also optionally allows you to accept feature requests, enhancements, and ideas.

The plugin is i18n ready and compatible (POT file included in the /languages/ directory)

 * Hebrew (עִבְרִית) translation provided by http://atar4u.com/

NOTE: This is NOT a support ticket plugin, this is bug tracking software.  However, we have also written a [free support ticket plugin](http://indiedevbundle.com/app/idb-ultimate-wordpress-bundle/#idbbugtracker "free support ticket plugin") called: IDB Support Tickets.

== Installation ==

For complete detail and initial configuration tutorials and documentation, please visit the [Installation Documentation](http://indiedevbundle.com/app/idb-ultimate-wordpress-bundle/#idbbugtracker "wpBugTracktor Installation")

The recommended way to install IDB Bug Tracker is to go into the Wordpress admin panel, and click on Add New under the 
Plugins menu.  Search for IDB Bug Tracker or wpBugTracktor, and then click on Install, then click Install Now.  Once the installation 
completes, Activate the plugin

Or, if you want to install manually:

1. Download the wpbugtracktor.zip file
1. Extract the zip file to your hard drive, using 7-zip or your archiver of choice.
1. Upload the `/wpbugtracktor/` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Create a new page, call it something like "Bug Tracker"
1. Visit the wpBugTracktor admin page and select a "mainpage" for wpBugTracktor to use, like the "Bug Tracker" page we told you to create in the last step

== Frequently Asked Questions ==

= I have questions, where do I get answers? =
- http://indiedevbundle.com/app/idb-ultimate-wordpress-bundle/#idbbugtracker

== Screenshots ==
 
1. The optional "Setup Wizard"


== Changelog ==

= 0.9.12 =
 * Hebrew (עִבְרִית) translation provided by http://atar4u.com/

= 0.9.11 =
* Updated: Comments admin page adjusted to make it easier to tell what comments belong to which bug report.

= 0.9.10 =
* Updated: Shortcode fixed

= 0.9.9 =
* Updated: Compatible with 4.1 and 4.2 nightly build
* Updated: Shortcode documentation updated

= 0.9.8 =
* Fixed: Can now successfully delete versions

= 0.9.7 =
* Updated: Rebranded and minor bug fix

= 0.9.6 =
* Updated: Versions and Components label no longer appears if there are no versions or components to select from when creating a ticket

= 0.9.5 =
* Fixed:  Creating a new page for the main page button works now

= 0.9.4 =
* Fixed: Fatal error was fixed that caused new installs to not work due to the plugin's name not matching the folder names inside the source files

= 0.9.3 =
* Added: Created the /languages/ directory, added the wpbugtracktor.pot file, and added an init action hook to enable i18n support for wpbugtracktor
* Updated: The Manage Comments page got the first step towards becoming usable, but it's definitely not there yet

= 0.9.2 =
* Note: Initial Wordpress.org release
* Updated: Renamed the old issues admin page to Manage Issues
* Added: Created new Manage Comments page 

= 0.9.1 =
* Added: Added new shortcode for listing issues on a project
* Added: Added new shortcode for listing projects
* Updated: Adjusted main shortcode to show project list and issues list
* Updated: Combined all ajax calls into two files /admin/adminajax.php and /admin/publicajax.php respectively
* Updated: Removed the include calls for wp-config.php and replaced them with action hooks
* Updated: Added and corrected some strings for i7n translation

= 0.9.0 =
* Note: Initial public BETA release

== Upgrade Notice ==

= 0.9.0 =
* Initial release
