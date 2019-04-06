<?php
if (!defined('CUSTOM_CHECK_GLB'))
{
    header("Location: upgrade");
    die();
}
else
{
	// define http protocol
	define('HTTP_PROTOCOL', 'http');

    define('DB_DAUPHU_MASTER_HOST', 'localhost');
	define('DB_DAUPHU_MASTER_USER', 'root');
	define('DB_DAUPHU_MASTER_PASS', '');
	define('DB_DAUPHU_MASTER_DBNAME', 'dauphu');
        
    define('DB_DAUPHU_SLAVE_HOST', 'localhost');
	define('DB_DAUPHU_SLAVE_USER', 'root');
	define('DB_DAUPHU_SLAVE_PASS', '');
	define('DB_DAUPHU_SLAVE_DBNAME', 'dauphu');

}
?>