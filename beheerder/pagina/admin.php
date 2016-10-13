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

    <div class="main-content">
        <div class="werkenemer">
            <?php
                include "includes/werknemer.php";
            ?>
        </div>
        <div class="manager">
            <?php
                include "includes/manager.php";
            ?>
        </div>
        <div class="beheerder">
            <?php
                include "includes/beheerder.php";
            ?>
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



