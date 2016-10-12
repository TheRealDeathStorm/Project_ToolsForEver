<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 10-10-2016
 * Time: 11:50
 * De producten pagina
 */
?>
<?php
include "DBconnect.php";
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
    <h2> Producten invoeren</h2>

    <div class="main-content-producten">
        <div class="product_invoer">
            <form method="post">
                    <p>
                        product naam:<br>
                        <input type="text" name="username" placeholder="Gebruikersnaam">
                    </p>
                    <p>
                        product voorraad:<br>
                        <input type="text" name="password" placeholder="Wachtwoord">
                    </p>
                    <p>
                        product prijs exclusief BTW:<br>
                        <input type="text" name="password" placeholder="Wachtwoord">
                    </p>
                    <p>
                        product prijs inclusief BTW:<br>
                        <input type="text" name="password" placeholder="Wachtwoord">
                    </p>
                    <p>
                        <button>
                            <input type="submit" name="werknemertoevoegen">
                        </button>
                    </p>
                <div class="product_info">
                    <form method="post">
                        <button type="submit" name="producten">Producten</button>
                        <br>
                        <?php
                        if(isset($_POST['producten'])) {

                            $sql = "SELECT product_id, product_naam, product_voorraad, product_prijs_excl, product_prijs_incl FROM product_info";
                            $result = mysqli_query($db, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "Product id: " . $row["product_id"] . "<br>" . "Product naam: " . $row["product_naam"] . "<br>" .
                                        "Product voorraad: " . $row["product_voorraad"] . "<br>" .
                                        "product prijs exclusief BTW: " ."€". $row["product_prijs_excl"] . "<br>" .
                                        "product prijs inclusief BTW: " ."€". $row["product_prijs_incl"];
                                }
                            } else {
                                echo "Error: " . $sql . "<br>" . $db->error;
                            }
                        }
                        ?>
                    </form>
                </div>
            </form>
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


