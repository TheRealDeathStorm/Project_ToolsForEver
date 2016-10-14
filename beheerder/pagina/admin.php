<?php
/**
 * Created by PhpStorm.
 * User: Niels en Mike
 * Date: 10-10-2016
 * Time: 11:51
 * De admin pagina voor toevoegen nieuwe accounts
 */
?>
<?php
include "../DBconnect.php";
include "schrijf/schrijfwerknemer.php";
include "schrijf/schrijfmanager.php";
include "schrijf/schrijfbeheerder.php";
?>
<html>
<head>
    <link href="../../css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main-container">
    <?php
    include "includes/header.php";
    ?>

    <div class="main-content-admin">
        <div class="werkenemer">
            <form method="post">
                <button type="submit" name="werknemer">Werknemers</button>
            <?php
            if(isset($_POST['werknemer'])) {
                require_once "includes/werknemer.php";
            }
            ?>
            </form>
        </div>
        <div class="manager">
            <form method="post">
                <button type="submit" name="manager">Managers</button>
                <?php
                if(isset($_POST['manager'])) {
                    require_once "includes/manager.php";
                }
                ?>
            </form>
        </div>
        <div class="beheerder">
            <form method="post">
                <button type="submit" name="beheerder">Beheerders</button>
                <?php
                if(isset($_POST['beheerder'])) {
                    require_once "includes/beheerder.php";
                }
                ?>
            </form>
        </div>
    </div>

    <div class="clearfix">

    </div>

    <?php
    include "includes/footer.php";
    ?>
</div>
</body>
</html>



