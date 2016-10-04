<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 4-10-2016
 * Time: 10:37
 */
?>
<?php
session_start();
if(session_destroy())
{
    header("Location: ../index.php");
}

?>