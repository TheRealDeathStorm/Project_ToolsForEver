<?php
/**
 * Created by PhpStorm.
 * User: Niels en Mike.
 * Date: 4-10-2016
 * Time: 09:47
 * Database connectie.
 */
?>
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ToolsForEver');
define('DB_PASSWORD', 'admin');
define('DB_DATABASE', 'toolsforever');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

