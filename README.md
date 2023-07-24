## Assign Custom Permission WordPress Plugin

**Plugin Name:** Assign Custom Permission  
**Plugin URI:** http://localhost/wordpress/assign-custom-permission  
**Description:** This is a custom WordPress plugin that allows contributors to add, update, and publish their own pages.  
**Version:** 1.0.0  
**Author:** Sameen Irfan  
**Author URI:** https://example.com  
**License:** GPL v2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  
**Text Domain:** assign-custom-permission  
**Domain Path:** /languages  

### Description

The "Assign Custom Permission" plugin is a custom WordPress plugin designed to provide additional capabilities to users with the 'contributor' role. By default, WordPress limits contributors to only creating and managing their own drafts. With this plugin, contributors will have the ability to edit, publish, and delete their own pages.

### Installation

1. Download the plugin ZIP file.
2. Log in to your WordPress admin dashboard.
3. Navigate to "Plugins" > "Add New."
4. Click on the "Upload Plugin" button.
5. Choose the plugin ZIP file and click "Install Now."
6. Once the installation is complete, click "Activate Plugin" to enable the functionality.

### How It Works

When the plugin is activated, contributors will be granted additional capabilities for a specific page (identified by its page ID). By default, the specific page ID is commented out in the code. To assign custom permissions to a specific page, uncomment the line that defines `$page_id` and replace the value `21` with the actual page ID.

### Plugin Activation and Deactivation

The plugin includes activation and deactivation hooks to execute code upon activation and deactivation, respectively. When the plugin is activated, a message will be logged to the error log. Upon deactivation, the custom capabilities assigned to the 'contributor' role will be removed to revert to default WordPress behavior.

### License

This plugin is licensed under the GNU General Public License v2 or later. It is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the [GNU General Public License](https://www.gnu.org/licenses/gpl-2.0.html) for more details.

### Support and Contributions

For support or to contribute to this plugin, please visit the [GitHub repository]([https://bitbucket.org/yourusername/assign-custom-permission](https://github.com/sameenirfan/Assign-Custom-Permission-WordPress-Plugin/)).

---

Note: Replace "yourusername" in the Bitbucket repository link with your actual Bitbucket username where you plan to host the plugin's code. Also, ensure to add any necessary credits, links, or other relevant information as required by your specific plugin development and distribution policies.
