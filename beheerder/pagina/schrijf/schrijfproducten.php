<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 12-10-2016
 * Time: 16:43
 * PHP bestand voor inschrijven van producten in de database.
 */
?>
<?php
if(isset($_POST['product_toevoegen'])) {
    $product_naam = $_POST['product_naam'];

    $product_voorraad = $_POST['product_voorraad'];

    $prijs_excl_btw = $_POST['prijs_excl_btw'];

    $prijs_incl_btw = $_POST['prijs_incl_btw'];

    $sql = mysqli_query($db, "INSERT INTO product_info (product_naam, product_voorraad, product_prijs_excl, product_prijs_incl)
VALUES ('$product_naam', '$product_voorraad', '$prijs_excl_btw', '$prijs_incl_btw')");
}
