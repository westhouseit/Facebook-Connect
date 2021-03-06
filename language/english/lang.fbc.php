<?php

 /**
 * Solspace - FBC
 *
 * @package 	Solspace:FBC
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2010-2012, Solspace, Inc.
 * @link		http://www.solspace.com/docs/addon/c/Facebook_Connect/
 * @version		2.0.9
 * @filesource 	./system/expressionengine/third_party/fbc/language/english/
 */

$lang = $L = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

"fbc_module_name" =>
"FBC",

"fbc_module_description" =>
"Integrate Facebook with your website",

"fbc_module_version" =>
"Facebook Connect",

'modules' =>
"Modules",

'update_fbc_module' =>
"Update the Facebook Connect Module",

'update_failure' =>
"The update was not successful.",

'update_successful' =>
"The update was successful",

//----------------------------------------
//  Main Menu
//----------------------------------------

'online_documentation' =>
"Online Documentation",

//----------------------------------------
//	Diagnostics
//----------------------------------------

'diagnostics' =>
"Diagnostics",

'diagnostics_exp' =>
"Verify Facebook connectivity settings.",

'api_credentials_present' =>
"API Credentials Present?",

'api_credentials_present_exp' =>
"In order to connect to Facebook you need to have registered your site as a Facebook application and have received an application ID and a secret hash string.<br /><a href='http://www.facebook.com/developers/createapp.php' target='_blank'>Establish your site as a Facebook application here.</a>",

'api_credentials_are_present' =>
"API credentials ARE present",

'api_credentials_are_not_present' =>
"API credentials ARE NOT present",

'logged_in_to_facebook' =>
"Logged in to Facebook yet?",

'logged_in_to_facebook_exp' =>
"Make sure you are logged into your Facebook account using this button. We will then try to connect to the API.",

'api_successful_connect' =>
"Successful API Connection?",

'api_successful_connect_exp' =>
"We attempt to connect to the Facebook API once you login with your account. If, after logging into Facebook using the button above, this connection is not established, confirm your APP ID and API Secret settings on the Facebook site.",

'api_connect_was_successful' =>
"An API connection WAS established.",

'api_connect_was_not_successful' =>
"An API connection WAS NOT established.",

'api_login_was_successful' =>
"Login WAS successful",

'api_login_was_not_successful' =>
"Login WAS NOT successful",

//----------------------------------------
//  Preferences
//----------------------------------------

'preferences' =>
"Preferences",

'select' =>
"Select",

'fbc_member_group_required' =>
"Please choose a Facebook Connect member group.",

'preferences_exp' =>
"These general preferences control how Facebook interacts with your website.",

'preferences_updated' =>
"Your preferences have been updated.",

'fbc_app_id' =>
"Facebook Application ID",

'fbc_app_id_exp' =>
"The application ID is provided by Facebook when you register your website as a Facebook application. <a href='http://www.facebook.com/developers/createapp.php' target='_blank'>Establish your site as a Facebook application here.</a>",

'fbc_secret' =>
"Facebook Application Secret",

'fbc_secret_exp' =>
"In addition to an application ID from Facebook, you will also receive a secret string. This provides an added layer of security for your Facebook integration.",

'fbc_eligible_member_groups' =>
"Eligible Member Groups",

'fbc_eligible_member_groups_exp' =>
"If someone is already logged in to your EE site and they login using the Facebook login button, their two accounts can be synched. In order for this to happen, they must belong to one of the member groups you indicate here.",

'fbc_member_group' =>
"FBC Member Group",

'fbc_member_group_exp' =>
"If a Facebook user joins your site, but does not already have a member account with you, they can create a simple member account on the fly. When they do, this member group will be used as the default group to which they are assigned at registration time.",

'fbc_require_member_account_activation' =>
"Require Member Account Activation of Facebook Users?",

'fbc_require_member_account_activation_exp' =>
"You can override your primary member registration preferences here. If someone registers for your site using the registration form included in this module, this setting will be respected. Note that if you use the passive registration option on your site, this setting will be ignored.",

'fbc_no_activation' =>
"No activation required",

'fbc_email_activation' =>
"Self-activation via email",

'fbc_admin_activation' =>
"Manual activation by an administrator",

'fbc_confirm_account_sync' =>
"Confirm Before Syncing Accounts?",

'fbc_confirm_account_sync_exp' =>
"When set to yes, if someone is logged into EE and logs into Facebook on your site, they must first submit the account_sync_form before their Facebook account will be synced with their EE account.",

'fbc_passive_registration' =>
"Enable Passive Registration?",

'fbc_passive_registration_exp' =>
"The easiest method to use FBC is to enable passive registration. In this mode, someone logging into a site using the Facebook login button will automatically be registered as an EE member if they are not already registered.",

//----------------------------------------
//  Buttons
//----------------------------------------

'save' =>
"Save",

//----------------------------------------
//  Errors
//----------------------------------------

'invalid_request' =>
"Invalid Request",

'invalid_url' =>
"Invalid URL",

'invalid_url_exp' =>
"The Facebook Connect URL should be a valid URL and a reference to a directory only. Do not include the name of the xd_receiver.htm file.",

'fbc_module_disabled' =>
"The FBC module is currently disabled.  Please insure it is installed and up to date by going 
to the module's control panel in the ExpressionEngine Control Panel",

'disable_module_to_disable_extension' =>
"To disable this extension, you must disable its corresponding <a href='%url%'>module</a>.",

'enable_module_to_enable_extension' =>
"To enable this extension, you must install its corresponding <a href='%url%'>module</a>.",

'cp_jquery_requred' =>
"The 'jQuery for the Control Panel' extension must be <a href='%extensions_url%'>enabled</a> to use this module.",

//----------------------------------------
//  Update
//----------------------------------------

'update_fbc' =>
"Update the FBC Module",

'fbc_update_message' =>
"It looks like you have uploaded a new version of FBC. Please run the upgrade script by clicking 'Update' below.",

//----------------------------------------
//  API errors
//----------------------------------------

'could_not_connect_to_facebook' =>
"A connection could not be made with the Facebook API.",

//----------------------------------------
//  Login errors
//----------------------------------------

'not_authorized' =>
"You are not authorized to access this website.",

'mbr_account_not_active' =>
"You have an account that has not yet been activated by this website's webmaster.",

'multi_login_warning' =>
"You have already logged into this site from another web browser.",

'unable_to_login' =>
"We were unable to log you in to this site.",

'not_logged_in' =>
"You must be logged in to this site to submit this form.",

'already_logged_in' =>
"You are already logged in to this website.",

//----------------------------------------
//  Sync errors
//----------------------------------------

'not_logged_in' =>
"You must be logged in to this site to submit this form.",

'not_fb_synced' =>
"Your account is not currently synced to any Facebook account.",

'unsync_error' =>
"There was an error unsyncing any Facebook accounts from your website profile.",

//----------------------------------------
//  Register errors
//----------------------------------------

'registration_not_enabled' =>
"Registration is not currently allowed on this site.",

'facebook_member_group_missing' =>
"A member group must be provided for this registration process. Please contact the site administrator.",

'facebook_not_logged_in' =>
"Please login to Facebook before using this registration form.",

'email_required_for_registration' =>
"An email address is required for registration.",

'username_required_for_registration' =>
"A username is required for registration.",

'blank_required_for_registration' =>
"%field_label% is required for registration.",

'fb_user_already_exists' =>
"Your Facebook has already been used to register on this site. Please try logging in.",

'mbr_terms_of_service_required' =>
"You must accept the terms of service in order to register.",

'captcha_required' =>
"The text within the captcha image must be submitted.",

'could_not_create_account' =>
"An account linked to your Facebook profile could not be created.",

'member_group_not_eligible' =>
"The member group to which you belong does not allow login through Facebook.",

'account_created' =>
"Account Created",

'back' =>
"Back",

"mbr_admin_will_activate" =>
"A site administrator will activate your account and notify you when it is ready for use.",

"mbr_membership_instructions_email" =>
"You have just been sent an email containing membership activation instructions.",

"mbr_activation_success" =>
"Your account has been activated.",

"mbr_may_now_log_in" =>
"You may now log in and begin using it.",

"passwords_do_not_match" =>
"The password and password confirmation did not match.",

"please_complete_field" =>
"Please complete this field.",

"please_accept_terms" =>
"You must accept the terms of service of this website before continuing.",

"facebook_signed_request_failed" =>
"An error occurred in the communication between Facebook and this website.",

"facebook_field_metadata_failed" =>
"The Facebook registration was not successful.",

//----------------------------------------
//	Commenting
//----------------------------------------

'comment_on' =>
"{*actor*} commented on ",

'commented_on' =>
"{*actor*} commented on ",

/* END */
''=>''
);
?>