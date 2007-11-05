<?php
/**
 *     ---------------       DO NOT DELETE!!!     ---------------
 * 
 *     Plugin Name:  01-WPF-TestPlugin
 *     Plugin URI:   http://code.google.com/p/wordpress-plugin-framework/
 *     Description:  A simple test plugin used to demonstrate the WordpressPluginFramework class.
 *     Version:      0.02
 *     Author:       Keith Huster
 *     Author URI:   http://www.doubleblackdesign.com
 *
 *     ---------------       DO NOT DELETE!!!     ---------------
 *
 *    This is the required license information for a Wordpress plugin.
 *
 *    Copyright 2007  Keith Huster  (email : husterk@doubleblackdesign.com)
 *
 *    This program is free software; you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation; either version 2 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program; if not, write to the Free Software
 *    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 *     ---------------       DO NOT DELETE!!!     ---------------
 */



/**
 * Definitions list for our custom plugin.
 * 
 */
define("PLUGIN_TITLE", "Test Plugin for the Wordpress Plugin Framework");
define("PLUGIN_VERSION", "0.02");
define("PLUGIN_ADMIN_MENU_TITLE", "Test Plugin");
define("PLUGIN_ADMIN_MENU_PAGE_TITLE", "Test Plugin Page");
define("PLUGIN_ADMIN_MENU_PAGE_SLUG", "test-plugin-options");



/**
 * Include the WordpressPluginFramework.
 */
require_once( "wordpress-plugin-framework.php" ); 



/**
 * TestPlugin - Simple plugin class used to demonstrate the WordpressPluginFramework.
 *
 * This class creates a simple plugin that demonstrates the capabilities of the WordpressPluginFramework.
 * Currently abilities demonstrated include:
 *
 *    1. Deriving a plugin from the WordpressPluginFramework base class.
 *    2. Creating options for the plugin.
 *    3. Initializing the plugin.
 *    4. Creating content blocks for the plugin's administration page.
 *    5. Registering the plugin's administration page with Wordpress.
 * 
 * @package wpf-test-plugin
 * @since {WP 2.3} 
 * @author Keith Huster
 */
class TestPlugin extends WordpressPluginFramework
{
   // ---------------------------------------------------------------------------
   // Methods used to display content block within the plugin administration page.
   // ---------------------------------------------------------------------------

   /**
	 * HTML_DisplayPluginDescriptionBlock() - Displays the "Plugin Description" content block.
	 *
	 * This function generates the markup required to display the specified content block.
	 *
	 * @param void      None.
	 * 
    * @return void     None.  	 
	 * 
	 * @access private  Access via internal callback only.
    * @since {WP 2.3}
	 * @author Keith Huster
	 */
   function HTML_DisplayPluginDescriptionBlock()
   {
      ?>
      <p>Just a simple test to verify the plugin framework is working...</p>
      <?php
   }

   /**
	 * HTML_DisplayPluginOptionsDisplayedBlock() - Displays the "Plugin Options Displayed" content block.
	 *
	 * This function generates the markup required to display the specified content block.
	 *
	 * @param void      None.
	 * 
    * @return void     None.  	 
	 * 
	 * @access private  Access via internal callback only.
    * @since {WP 2.3}
	 * @author Keith Huster
	 */
   function HTML_DisplayPluginOptionsDisplayedBlock()
   {
      $this->DisplayPluginOption( 'myTextboxOption' );
      ?>
      <br />
      <br />
      <?php
      $this->DisplayPluginOption( 'myCheckboxOption' );
      ?>
      <br />
      <br />
      <?php
      $this->DisplayPluginOption( 'myRadiobuttonOption' );
      ?>
      <br />
      <br />
      <?php
      $this->DisplayPluginOption( 'myTextareaOption' );
      ?>
      <br />
      <br />
      <?php
      $this->DisplayPluginOption( 'myPasswordboxOption' );
   }

   /**
	 * HTML_DisplayPluginOptionsListedBlock() - Displays the "Plugin Options Listed" content block.
	 *
	 * This function generates the markup required to display the specified content block.
	 *
	 * @param void      None.
	 * 
    * @return void     None.  	 
	 * 
	 * @access private  Access via internal callback only.
    * @since {WP 2.3}
	 * @author Keith Huster
	 */
   function HTML_DisplayPluginOptionsListedBlock()
   {
      $optionsArray = $this->GetOptionsArray();
      
      if( is_array( $optionsArray ) )
      {
         ?>
         <table>
            <thead>
               <tr>
                  <th>Option Name</th>
                  <th>Option Type</th>
                  <th>Option Value</th>
                  <th>Option Description</th>
               </tr>
            </thead>
            <tbody>
               <?php
               foreach( $optionsArray AS $optionKey=>$optionValueArray )
               {
               ?>
                  <tr>
                     <td><?php echo( $optionKey ); ?></td>
                     <td><?php echo( $this->GetOptionType( $optionKey ) ); ?></td>
                     <td><?php echo( $this->GetOptionValue( $optionKey ) ); ?></td>
                     <td><?php echo( $this->GetOptionDescription( $optionKey ) ); ?></td>
                  </tr>
               <?php 
		      }
		      ?>
		      </tbody>
		   </table>
		   <?php
      }
   }

   /**
	 * HTML_DisplayPluginHelloWorldBlock() - Displays the "Hello World!" content block.
	 *
	 * This function generates the markup required to display the specified content block.
	 *
	 * @param void      None.
	 * 
    * @return void     None.  	 
	 * 
	 * @access private  Access via internal callback only.
    * @since {WP 2.3}
	 * @author Keith Huster
	 */
   function HTML_DisplayPluginHelloWorldBlock()
   {
      ?>
      <p>Hello World!</p>
      <?php
   }

   /**
	 * HTML_DisplayPluginHelloAgainBlock() - Displays the "Hello Again!" content block.
	 *
	 * This function generates the markup required to display the specified content block.
	 *
	 * @param void      None.
	 * 
    * @return void     None.  	 
	 * 
	 * @access private  Access via internal callback only.
    * @since {WP 2.3}
	 * @author Keith Huster
	 */  
   function HTML_DisplayPluginHelloAgainBlock()
   {
      ?>
      <p>Hello Again!</p>
      <?php
   }
}



/**
 * Demonstration of creating a TestPlugin utilizing the WordpressPlugin Framework.
 */
if( !$myTestPlugin  )
{
  // Create a new instance of your plugin that utilizes the WordpressPluginFramework.
  $myTestPlugin = new TestPlugin();
  
  // Add all of the options specific to your plugin then initialize the plugin.
  $myTestPlugin->AddOption( OPTION_TYPE_TEXTBOX, 'myTextboxOption', 'Hello!', 'Simple textbox option for your plugin.' );
  $myTestPlugin->AddOption( OPTION_TYPE_CHECKBOX, 'myCheckboxOption', CHECKBOX_UNCHECKED, 'Simple checkbox option for your plugin.' );
  $myTestPlugin->AddOption( OPTION_TYPE_RADIOBUTTONS, 'myRadiobuttonOption', 'Value 1', 'Simple radiobutton option for your plugin.,Value 1,Value 2,Value 3' );
  $myTestPlugin->AddOption( OPTION_TYPE_TEXTAREA, 'myTextareaOption', 'Hello! This is an example of a multiline text area.', 'Simple textarea option for your plugin.' );
  $myTestPlugin->AddOption( OPTION_TYPE_PASSWORDBOX, 'myPasswordboxOption', 'password', 'Simple passwordbox option for your plugin.' );
  $myTestPlugin->Initialize( __FILE__, PLUGIN_TITLE, PLUGIN_VERSION );
  
  // Add all of the custom content blocks to your plugin's administration page then register your
  // plugin's administration page with the Wordpress core.
  //   - Note that the SIDEBAR and MAIN content blocks will be displayed in the order they are added.
  //   - e.x.
  //              -- MAIN CONTENT AREA --             -- SIDEBAR CONTENT AREA --
  //              -----------------------             --------------------------
  //              'block-description'                 'block-hello-world'
  //              'block-options-displayed'           'block-hello-again'
  //              'block-options-listed'
  //
  $myTestPlugin->AddAdministrationPageBlock( 'block-description', 'Plugin Description', CONTENT_BLOCK_TYPE_MAIN, array($myTestPlugin, 'HTML_DisplayPluginDescriptionBlock') );
  $myTestPlugin->AddAdministrationPageBlock( 'block-options-displayed', 'Plugin Options Displayed', CONTENT_BLOCK_TYPE_MAIN, array($myTestPlugin, 'HTML_DisplayPluginOptionsDisplayedBlock') );
  $myTestPlugin->AddAdministrationPageBlock( 'block-options-listed', 'Plugin Options Listed', CONTENT_BLOCK_TYPE_MAIN, array($myTestPlugin, 'HTML_DisplayPluginOptionsListedBlock') );
  $myTestPlugin->AddAdministrationPageBlock( 'block-hello-world', 'Hello World', CONTENT_BLOCK_TYPE_SIDEBAR, array($myTestPlugin, 'HTML_DisplayPluginHelloWorldBlock') );
  $myTestPlugin->AddAdministrationPageBlock( 'block-hello-again', 'Hello Again', CONTENT_BLOCK_TYPE_SIDEBAR, array($myTestPlugin, 'HTML_DisplayPluginHelloAgainBlock') );
  $myTestPlugin->RegisterAdministrationPage( PLUGIN_ADMIN_MENU_TITLE, PLUGIN_ADMIN_MENU_PAGE_TITLE, PLUGIN_ADMIN_MENU_PAGE_SLUG, PARENT_MENU_PLUGINS, RIGHTS_REQUIRED_ADMIN );
}

?>
