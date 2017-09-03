<?php
/**
 * Main file
 */

/**
 * Initialize all the things. 
 */
require get_template_directory() . '/inc/init.php';

/**
 * Get rid of things that we don't need in the Admin menu
 */
function remove_menus(){

    /*Remove a bunch of menu buttons that don't matter to this site */
    remove_menu_page( 'edit-comments.php' );                //Comments
    remove_menu_page( 'edit.php?post_type=feedback' );      //Feedback
    remove_menu_page('edit.php?post_type=facebook_events'); //FB Events
    remove_menu_page('otw-bsw-settings');                   //Shortcode Button
    remove_menu_page('tools.php');                          //Tools
      
    /** Clean up The Events Cal Submenu */
    remove_submenu_page( 'edit.php?post_type=tribe_events', 'edit-tags.php?taxonomy=post_tag&amp;post_type=tribe_events' );
    remove_submenu_page( 'edit.php?post_type=tribe_events', 'edit-tags.php?taxonomy=tribe_events_cat&amp;post_type=tribe_events' );
    remove_submenu_page( 'edit.php?post_type=tribe_events', 'edit.php?post_type=tribe_venue' );
    remove_submenu_page( 'edit.php?post_type=tribe_events', 'edit.php?post_type=tribe_organizer' );
    remove_submenu_page( 'edit.php?post_type=tribe_events', 'aggregator' );
    remove_submenu_page( 'edit.php?post_type=tribe_events', 'tribe-app-shop' );
    remove_submenu_page( 'edit.php?post_type=tribe_events', 'tribe-help' );
    

}

add_action( 'admin_menu', 'remove_menus', 999 );

