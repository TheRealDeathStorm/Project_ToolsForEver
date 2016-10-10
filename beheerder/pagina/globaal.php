<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 10-10-2016
 * Time: 11:48
 * De pagina voor de globale weergave van ToolsForEver
 */
?>
<?php
include "DBconnect.php";
include "weergave/globaal.php";
?>
<html>
<head>
    <link href="../../css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main-container">
    <div class="header">
        <div class="menu">
            <nav>
                <a href="globaal.php">Globale weergave</a>
                <a href="fabrieken.php"> Fabrieken</a>
                <a href="producten.php"> Producten</a>
                <a href="locaties.php"> De locaties</a>
                <a href="admin.php"> Admin panel</a>
            </nav>
        </div>
    </div>

    <div class="main-content">
        <!--
        Zorg voor een query die alle informatie uit de database haalt.
        Dit met verschillende knoppen onderbouwen zodat er overzicht is.
        !-->
        <div class="filialen">
            <button type="submit" name="filialen">Filialen</button>
        </div>
        <div class="producten">
            <button type="submit" name="producten">Producten</button>
        </div>
        <div class="orders">
            <button type="submit" name="orders">Orders</button>
        </div>
    </div>

    <div class="clearfix">

    </div>

    <div class="footer">
        <div class="contact">
            Contact us at: 123@outlook.com
            <div class="logout">
                <a href="../logout.php">Log uit</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>





