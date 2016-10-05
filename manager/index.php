<?php
/**
 * Created by PhpStorm.
 * User: Niels en Mike
 * Date: 27-9-2016
 * Time: 12:54
 * Het admin.php bestand voor het project van PHP,
 * Op deze pagina komt het inlog systeem
 */
?>
<?php

include('users.php'); // Includes Login Script

if(isset($_SESSION['user'])){
    header("location: manager.php");
}
?>
<html>
<head>
    <link href="../css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main-container">
    <div class="header">
        <h1> Admin Panel </h1>
    </div>

    <div class="main-content">
        <div class="login">
            <form action="" method="post">
                <p><input type="text" name="username" value="" placeholder="Gebruikersnaam"></p>
                <p><input type="password" name="password" value="" placeholder="Wachtwoord"></p>
                <button type="submit" name="submit" value="Login">Login</button>

            </form>
        </div>
    </div>

    <div class="clearfix">

    </div>

    <div class="footer">
        <div class="contact">
            Contact us at: 123@outlook.com
        </div>
    </div>
</div>
</body>
</html>

