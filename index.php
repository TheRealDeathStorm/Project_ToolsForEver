<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 26-9-2016
 * Time: 16:04
 * het index.php voor ToolsForEver project:
 */
?>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    <header>
        <title>ToolsForEver</title>
    </header>
    <body>
    <form action="action_page.php">
        <div class="imgcontainer">
            <img src="" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    </body>
</html>
