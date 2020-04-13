<?php
# Provided by sysconf.wordpress

define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'euL0aeX2ahs8EFoh');
define('DB_HOST', 'localhost');
define('SECRET_KEY', 'manu1eeGuV2ooShiOhf0ku7ZAhl8ik7EZiapa0ah');
define('WP_CONTENT_DIR', '/var/lib/wordpress/wp-content');


/* die(__FILE__."++"); */
$_config_dir = dirname(__FILE__).'/'.basename(__FILE__, '.php').".d";
/* die($_config_dir); */
if (is_dir($_config_dir)) {
    foreach (glob($_config_dir."/*.php") as $filename)
        {
            include $filename;
        }
}
