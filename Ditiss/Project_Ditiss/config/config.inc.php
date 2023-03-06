<?php

# Default DVWA Configuration File
# Date: 2021-09-01

# Debugging
$DVWA_DEBUG = false;

# Database
$_DVWA = array();
$_DVWA[ 'db_server' ]   = 'localhost';
$_DVWA[ 'db_database' ] = 'dvwa';
$_DVWA[ 'db_user' ]     = 'root';
$_DVWA[ 'db_password' ] = 'password';
$_DVWA[ 'db_port' ]     = '3306';

# PHPIDS
$_DVWA[ 'phpids_enable' ]  = false;
$_DVWA[ 'phpids_path' ]    = 'phpids/0.7';
$_DVWA[ 'phpids_default_action' ] = 'monitor';
$_DVWA[ 'phpids_log_dir' ] = '/var/log/apache2/';

# Recaptcha
$_DVWA[ 'recaptcha_public_key' ]  = '';
$_DVWA[ 'recaptcha_private_key' ] = '';

# Default Security Level - default: low
$_DVWA[ 'default_security_level' ] = 'low';

# Default PHPIDS status - default: disabled
$_DVWA[ 'default_phpids_status' ] = 'disabled';

# Default ReCaptcha status - default: disabled
$_DVWA[ 'default_recaptcha_status' ] = 'disabled';

# Default PHPMailer security - default: disabled
$_DVWA[ 'default_phpmailer_security' ] = 'disabled';

# XSS prevention mode - default: 0
# 0 = disabled
# 1 = mode 1 - HTML Entity Encoding
# 2 = mode 2 - HTML Entity Encoding with a twist (default)
# 3 = mode 3 - htmlspecialchars()
$_DVWA[ 'xss_prevention_mode' ] = '2';

# CSRF token auto-refresh interval (in seconds) - default: 0 (disabled)
$_DVWA[ 'csrf_auto_refresh_interval' ] = '0';

# Hide PHP version - default: enabled
$_DVWA[ 'hide_php_version' ] = true;

# Disable database password disclosure - default: enabled
$_DVWA[ 'disable_db_pwd' ] = true;

# Default allow/deny file upload extensions
$_DVWA[ 'upload_file_extensions' ][ 'deny' ] = array( 'php', 'php3', 'php4', 'php5', 'php7', 'phtml', 'pl', 'py', 'cgi' );
$_DVWA[ 'upload_file_extensions' ][ 'allow' ] = array();

# Default PHPMailer settings
$_DVWA[ 'phpmailer_host' ]     = '127.0.0.1';
$_DVWA[ 'phpmailer_port' ]     = '25';
$_DVWA[ 'phpmailer_auth' ]     = false;
$_DVWA[ 'phpmailer_username' ] = '';
$_DVWA[ 'phpmailer_password' ] = '';
$_DVWA[ 'phpmailer_secure' ]   = '';

# Base URL of the web application (optional)
# Example: https://www.example.com/dvwa
# Leave blank to use the current URL
$_DVWA[ 'url' ]      = '';
$_DVWA[ 'url_port' ] = '';

?>

