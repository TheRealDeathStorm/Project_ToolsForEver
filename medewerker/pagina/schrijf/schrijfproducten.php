<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 13-10-2016
 * Time: 16:25
 * Het bestand met daarin de query voor het invoeren van producten.
 */
?>
<?php
if(isset($_POST['product_toevoegen'])) {
    $product_naam = $_POST['product_naam'];

    $product_voorraad = $_POST['product_voorraad'];

    $prijs_excl_btw = $_POST['prijs_excl_btw'];

    $prijs_incl_btw = $_POST['prijs_incl_btw'];

    $sql = "INSERT INTO product_info (product_naam, product_voorraad, product_prijs_excl, product_prijs_incl)
VALUES ('$product_naam', '$product_voorraad', '$prijs_excl_btw', '$prijs_incl_btw')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
