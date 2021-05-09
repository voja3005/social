<?php

/*
Plugin Name: Social Share Plugin
Description: Displays Social Share icons
Version: 1.0
Author: Vojislav Predolac
*/

// Add admin menu
function social_share_menu_item()
{
  add_submenu_page("options-general.php", "Social Share", "Social Share", "manage_options", "social-share", "social_share_page"); 
}

add_action("admin_menu", "social_share_menu_item");

// Options page
function social_share_page()
{
   ?>
      <div class="wrap">
         <h1>Social Sharing Options</h1>
 
         <form method="post" action="options.php">
            <?php
               settings_fields("social_share_config_section");
 
               do_settings_sections("social-share");
                
               submit_button(); 
            ?>
         </form>
      </div>
   <?php
}

// Display option fields
function social_share_settings()
{
    add_settings_section("social_share_config_section", "", null, "social-share");
 
    add_settings_field("social-share-facebook", "Facebook share button?", "social_share_facebook_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-twitter", "Twitter share button?", "social_share_twitter_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-google-plus", "Google+ share button?", "social_share_google_plus_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-pinterest", "Pinterest share button?", "social_share_pinterest_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-linkedin", "Linkedin share button?", "social_share_linkedin_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-whatsapp", "Whatsapp share button?", "social_share_whatsapp_checkbox", "social-share", "social_share_config_section");
 
    register_setting("social_share_config_section", "social-share-facebook");
    register_setting("social_share_config_section", "social-share-twitter");
    register_setting("social_share_config_section", "social-share-google-plus");
    register_setting("social_share_config_section", "social-share-pinterest");
    register_setting("social_share_config_section", "social-share-linkedin");
    register_setting("social_share_config_section", "social-share-whatsapp");
}
 
function social_share_facebook_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-facebook" value="1" <?php checked(1, get_option('social-share-facebook'), true); ?> /> Check for Yes
   <?php
}

function social_share_twitter_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-twitter" value="1" <?php checked(1, get_option('social-share-twitter'), true); ?> /> Check for Yes
   <?php
}

function social_share_google_plus_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-google-plus" value="1" <?php checked(1, get_option('social-share-google-plus'), true); ?> /> Check for Yes
   <?php
}

function social_share_pinterest_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-pinterest" value="1" <?php checked(1, get_option('social-share-pinterest'), true); ?> /> Check for Yes
   <?php
}

function social_share_linkedin_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-linkedin" value="1" <?php checked(1, get_option('social-share-linkedin'), true); ?> /> Check for Yes
   <?php
}

function social_share_whatsapp_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-whatsapp" value="1" <?php checked(1, get_option('social-share-whatsapp'), true); ?> /> Check for Yes
   <?php
}
 
add_action("admin_init", "social_share_settings");