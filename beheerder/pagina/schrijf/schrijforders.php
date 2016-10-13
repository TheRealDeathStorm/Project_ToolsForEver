<?php
/**
 * Created by PhpStorm.
 * User: Niels en Mike
 * Date: 13-10-2016
 * Time: 18:27
 * het bestand met daarin de query voor het invoeren van nieuwe orders
 */
?>
<?php
if(isset($_POST['order_toevoegen'])) {
    $filiaal_naam = $_POST['filiaal_naam'];

    $product_naam = $_POST['product_naam'];

    $order_aantal = $_POST['order_aantal'];

    $order_prijs = $_POST['order_prijs'];


    $sql = "INSERT INTO order_info(filiaal_naam, Product_naam, Order_aantal, Order_prijs)
VALUES ('$filiaal_naam', '$product_naam', $order_aantal, '$order_prijs')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

}
