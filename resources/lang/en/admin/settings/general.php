<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domain',
    'ad_domain_help'			=> 'This is sometimes the same as your email domain, but not always.',
    'is_ad'				        => 'This is an Active Directory server',
	'alert_email'				=> 'Send alerts to',
	'alerts_enabled'			=> 'Email Alerts Enabled',
	'alert_interval'			=> 'Expiring Alerts Threshold (in days)',
	'alert_inv_threshold'		=> 'Inventory Alert Threshold',
	'asset_ids'					=> 'Asset IDs',
	'audit_interval'            => 'Audit Interval',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months.',
	'audit_warning_days'        => 'Audit Warning Threshold',
    'audit_warning_days_help'   => 'How many days in advance should we warn you when assets are due for auditing?',
	'auto_increment_assets'		=> 'Generate auto-incrementing asset IDs',
	'auto_increment_prefix'		=> 'Prefix (optional)',
	'auto_incrementing_help'    => 'Enable auto-incrementing asset IDs first to set this',
	'backups'					=> 'Backups',
	'barcode_settings'			=> 'Barcode Settings',
    'confirm_purge'			    => 'Confirm Purge',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone.',
	'custom_css'				=> 'Custom CSS',
	'custom_css_help'			=> 'Enter any custom CSS overrides you would like to use. Do not include the &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Default Currency',
	'default_eula_text'			=> 'Default EULA',
  'default_language'			=> 'Default Language',
	'default_eula_help_text'	=> 'You can also associate custom EULAs to specific asset categories.',
    'display_asset_name'        => 'Display Asset Name',
    'display_checkout_date'     => 'Display Checkout Date',
    'display_eol'               => 'Display EOL in table view',
    'display_qr'                => 'Display Square Codes',
	'display_alt_barcode'		=> 'Display 1D barcode',
	'barcode_type'				=> '2D Barcode Type',
	'alt_barcode_type'			=> '1D barcode type',
    'eula_settings'				=> 'EULA Settings',
    'eula_markdown'				=> 'This EULA allows <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'			=> 'General Settings',
	'generate_backup'			=> 'Generate Backup',
    'header_color'              => 'Header Color',
    'info'                      => 'These settings let you customize certain aspects of your installation.',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP enabled',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Settings',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
	'ldap_server_cert'			=> 'LDAP SSL certificate validation',
	'ldap_server_cert_ignore'	=> 'Allow invalid SSL Certificate',
	'ldap_server_cert_help'		=> 'Select this checkbox if you are using a self signed SSL cert and would like to accept an invalid SSL certificate.',
    'ldap_tls'                  => 'Use TLS',
    'ldap_tls_help'             => 'This should be checked only if you are running STARTTLS on your LDAP server. ',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords synced with local passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Username Field',
    'ldap_lname_field'          => 'Last Name',
    'ldap_fname_field'          => 'LDAP First Name',
    'ldap_auth_filter_query'    => 'LDAP Authentication query',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'LDAP Employee Number',
    'ldap_email'                => 'LDAP Email',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'This Snipe-IT install can load scripts from the outside world.',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Optionally include a few sentences on your login screen, for example to assist people who have found a lost or stolen device. This field accepts <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Restricting users (including admins) assigned to companies to their company\'s assets.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'optional'					=> 'optional',
    'per_page'                  => 'Results Per Page',
    'php'                       => 'PHP Version',
    'php_gd_info'               => 'You must install php-gd to display QR codes, see install instructions.',
    'php_gd_warning'            => 'PHP Image Processing and GD plugin is NOT installed.',
    'pwd_secure_complexity'     => 'Password Complexity',
    'pwd_secure_complexity_help' => 'Select whichever password complexity rules you wish to enforce.',
    'pwd_secure_min'            => 'Password minimum characters',
    'pwd_secure_min_help'       => 'Minimum permitted value is 5',
    'pwd_secure_uncommon'       => 'Prevent common passwords',
    'pwd_secure_uncommon_help'  => 'This will disallow users from using common passwords from the top 10,000 passwords reported in breaches.',
    'qr_help'                   => 'Enable QR Codes first to set this',
    'qr_text'                   => 'QR Code Text',
    'setting'                   => 'Setting',
    'settings'                  => 'Settings',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Site Name',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new">create an incoming webhook</a> on your Slack account.',
    'snipe_version'  			=> 'Snipe-IT version',
    'system'                    => 'System Information',
    'update'                    => 'Update Settings',
    'value'                     => 'Value',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'About Settings',
    'about_settings_text'       => 'These settings let you customize certain aspects of your installation.',
    'labels_per_page'           => 'Labels per page',
    'label_dimensions'          => 'Label dimensions (inches)',
    'next_auto_tag_base'        => 'Next auto-increment',
    'page_padding'             => 'Page margins (inches)',
    'purge'                    => 'Purge Deleted Records',
    'labels_display_bgutter'    => 'Label bottom gutter',
    'labels_display_sgutter'    => 'Label side gutter',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link to Snipe-IT in Emails',
    'show_url_in_emails_help_text'      => 'Uncheck this box if you do not wish to link back to your Snipe-IT installation in your email footers. Useful if most of your users never login. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximum height in pixels that thumbnails may display in the listing view. Min 25, max 500.',
    'two_factor'        => 'Two Factor Authentication',
    'two_factor_secret'        => 'Two-Factor Code',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Enable Two Factor',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Selective (Users can enable or disable if permitted)',
    'two_factor_required'        => 'Required for all users',
    'two_factor_disabled'        => 'Disabled',
    'two_factor_enter_code'	=> 'Enter Two-Factor Code',
    'two_factor_config_complete'	=> 'Submit Code',
    'two_factor_enabled_edit_not_allowed' => 'Your administrator does not permit you to edit this setting.',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'require_accept_signature'      => 'Require Signature',
    'require_accept_signature_help_text'      => 'Enabling this feature will require users to physically sign off on accepting an asset.',
    'left'        => 'left',
    'right'        => 'right',
    'top'        => 'top',
    'bottom'        => 'bottom',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'zerofill_count'        => 'Length of asset tags, including zerofill',
);
