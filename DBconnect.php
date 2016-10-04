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
$con = mysqli_connect("localhost","ToolsForEver","admin","toolsforever");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

