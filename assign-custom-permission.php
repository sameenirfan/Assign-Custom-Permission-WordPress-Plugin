<?php
/**
 * Plugin Name: Assign Custom Permission
 * Plugin URI:  http://localhost/wordpress/assign-custom-permission
 * Description: This is a custom WordPress plugin that allows contributors to add, update, and publish their own pages.
 * Version:     1.0.0
 * Author:      Sameen Irfan
 * Author URI:  https://example.com
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: assign-custom-permission
 * Domain Path: /languages
 */

function custom_page_permissions($allcaps, $cap, $args) {
    // Get the current user's ID
    $user_id = isset($args[0]) ? $args[0] : 0;

    // Check if the current user has the 'contributor' role
    if (isset($allcaps['contributor']) && $user_id) {
        // Define the specific page ID where you want to assign custom permissions
        //$page_id = 21; // Replace 21 with the actual page ID

        // Check if the current page matches the specific page ID
        //if ($args[21] === $page_id) {
            // Grant edit and publish permissions to the contributor for the specific page
            $allcaps['edit_pages'] = true;
            $allcaps['publish_pages'] = true;
            $allcaps['delete_pages'] = true;
       // }
    }

    return $allcaps;
}
add_filter('user_has_cap', 'custom_page_permissions', 10, 3);

function my_custom_plugin_activation() {
    // Your activation code here
    // This code will run when the plugin is activated
    // Execute any tasks or setup required for the plugin
    error_log('Plugin activated'); // Log a message to the error log

    // Add your additional activation code here
}
register_activation_hook(__FILE__, 'my_custom_plugin_activation');

function my_custom_plugin_deactivation() {
    // Your deactivation code here
    // This code will run when the plugin is deactivated

    // Remove the custom capabilities assigned to the 'contributor' role
    $user_roles = get_editable_roles();
    foreach ($user_roles as $role_slug => $role_info) {
        if ($role_slug === 'contributor') {
            $role_obj = get_role($role_slug);
            if ($role_obj) {
                $role_obj->remove_cap('edit_pages');
                $role_obj->remove_cap('publish_pages');
                $role_obj->remove_cap('delete_pages');
            }
            break;
        }
    }
}
register_deactivation_hook(__FILE__, 'my_custom_plugin_deactivation');
