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
<html>
<head>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main-container">
    <div class="header">
        <h1> Admin Panel </h1>
    </div>

    <div class="main-content">
        <div class="login">
            <form method="post" action="admin/index.php">
                <p><input type="text" name="login" value="" placeholder="Gebruikersnaam"></p>
                <p><input type="password" name="password" value="" placeholder="Wachtwoord"></p>
                <p class="remember_me">
                    <label>
                        <input type="checkbox" name="remember_me" id="remember_me">
                        Remember me on this computer
                    </label>
                </p>
                <p class="submit"><input type="submit" name="commit" value="Login"></p>
            </form>
        </div>
    </div>

    <div class="clearfix">

    </div>

    <div class="footer">
        Contact us at: 123@outlook.com
    </div>
</div>
</body>
</html>

