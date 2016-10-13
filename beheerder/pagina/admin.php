<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 10-10-2016
 * Time: 11:51
 * De admin pagina voor toevoegen nieuwe accounts
 */
?>
<?php
include "DBconnect.php";
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
        include "../../includes/header.php";
    ?>

    <div class="main-content">
        <div class="werkenemer">
            <div class="toevoegen wt">
                <h3> Werkemer toevoegen</h3>
                <form method="post">
                    <p>
                        Gebruikersnaam:<br>
                        <input type="text" name="username" placeholder="Gebruikersnaam">
                    </p>
                    <p>
                        Wachtwoord:<br>
                        <input type="text" name="password" placeholder="Wachtwoord">
                    </p>
                    <p>
                        <button>
                            <input type="submit" name="werknemertoevoegen">
                        </button>
                    </p>
                </form>
            </div>
            <div class="wijzigen ww">
                <h3> Werknemer accounts wijzigen </h3>
            </div>
            <div class="verwijderen wv">
                <h3> Werknemer accounts verwijderen </h3>
            </div>
        </div>
        <div class="manager">
            <div class="toevoegen mt">
                <h3> manager toevoegen</h3>
                <form method="post">
                    <p>
                        Gebruikersnaam:<br>
                        <input type="text" name="username" placeholder="Gebruikersnaam">
                    </p>
                    <p>
                        Wachtwoord:<br>
                        <input type="text" name="password" placeholder="Wachtwoord">
                    </p>
                    <p>
                        <button>
                            <input type="submit" name="managertoevoegen">
                        </button>
                    </p>
                </form>
            </div>
            <div class="wijzigen mw">
                <h3> Manager accounts wijzigen </h3>
            </div>
            <div class="verwijderen mv">
                <h3> Manager accounts verwijderen </h3>
            </div>
        </div>
        <div class="beheerder">
            <div class="toevoegen mb">
                <h3> beheerder toevoegen</h3>
                <form method="post">
                    <p>
                        Gebruikersnaam:<br>
                        <input type="text" name="username" placeholder="Gebruikersnaam">
                    </p>
                    <p>
                        Wachtwoord:<br>
                        <input type="text" name="password" placeholder="Wachtwoord">
                    </p>
                    <p>
                        <button>
                            <input type="submit" name="beheerdertoevoegen">
                        </button>
                    </p>
                </form>
            </div>
            <div class="wijzigen mw">
                <h3> Beheerder accounts wijzigen </h3>
            </div>
            <div class="verwijderen mb">
                <h3> Beheerder accounts verwijderen </h3>
            </div>
        </div>
    </div>

    <div class="clearfix">

    </div>

    <?php
    include "../../includes/footer.php";
    ?>
</div>
</body>
</html>



