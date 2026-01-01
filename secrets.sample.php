<?php
// Centralized Secrets Configuration
// Copy this file to secrets.php and update with your actual credentials
// secrets.php is gitignored and contains sensitive credentials

global $secrets;
$secrets = [];

// SSH SERVER
$secrets['ssh_username'] = 'root';
$secrets['ssh_password'] = 'CHANGE_ME';
$secrets['ssh_host'] = '192.168.1.0.0.1';
$secrets['ssh_port'] = '22';

// Database Credentials (User Provided)
$secrets['db_host'] = 'localhost';
$secrets['db_name'] = 'itflow';
$secrets['db_user'] = 'itflow';
$secrets['db_pass'] = 'CHANGE_ME';
$secrets['db_root_pass'] = 'CHANGE_ME';

// Shared Secrets
$secrets['md5_salt'] = 'CHANGE_ME_RANDOM_STRING';

// phpMyAdmin Credentials
$secrets['pma_blowfish_secret'] = 'CHANGE_ME_32_CHARS';

// Github Details
$secrets['github_username'] = 'your_username';
$secrets['github_token'] = 'ghp_CHANGE_ME';


#Install Script Default Answers

// Domain (FQDN)
$secrets['install_domain'] = 'itflow.example.com';

// Timezone
$secrets['install_timezone'] = 'Australia/Melbourne';

// Git Branch (master or develop)
$secrets['install_branch'] = 'master';

// SSL Options (letsencrypt, selfsigned, none)
$secrets['install_ssl_type'] = 'letsencrypt';

// URL Login Details
$secrets['url_username'] = 'admin@example.com';
$secrets['url_password'] = 'CHANGE_ME';
