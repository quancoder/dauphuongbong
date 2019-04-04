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

    define('DB_DAU_PHU_HOST', '66.42.54.208');
    define('DB_DAU_PHU_USER', 'admin');
    define('DB_DAU_PHU_PASS', '3d2bca4ff9b4fbe0b');
    define('DB_DAU_PHU_DBNAME', 'dauphuongbong');
    define('DB_DAU_PHU_PORT', '8989');

//    define('DB_DAU_PHU_HOST', 'localhost');
//    define('DB_DAU_PHU_USER', 'roor');
//    define('DB_DAU_PHU_PASS', '');
//    define('DB_DAU_PHU_DBNAME', 'dauphuongbong');
//    define('DB_DAU_PHU_PORT', '3306');


}
?>