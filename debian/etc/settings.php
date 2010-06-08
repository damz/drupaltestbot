<?php

/**
 * Database settings.
 */
require_once('/etc/drupaltestbot/config-db.php');
if (!isset($dbserver) || empty($dbserver)) $dbserver = 'localhost';
$db_url = "$dbtype://$dbuser:$dbpass@$dbserver/$dbname";
$db_prefix = '';

/**
 * Base URL (optional).
 */
# $base_url = 'http://www.example.com';  // NO trailing slash!

/**
 * PHP settings.
 */
ini_set('arg_separator.output',     '&amp;');
ini_set('magic_quotes_runtime',     0);
ini_set('magic_quotes_sybase',      0);
ini_set('session.cache_expire',     200000);
ini_set('session.cache_limiter',    'none');
ini_set('session.cookie_lifetime',  2000000);
ini_set('session.gc_maxlifetime',   200000);
ini_set('session.save_handler',     'user');
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid',    0);
ini_set('url_rewriter.tags',        '');

/**
 * Cookie domain.
 */
# $cookie_domain = 'example.com';

/**
 * Variable overrides.
 */
# $conf = array(
#   'site_name' => 'My Drupal site',
#   'theme_default' => 'minnelli',
#   'anonymous' => 'Visitor',
# );
