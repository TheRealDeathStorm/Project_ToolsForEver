<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 13-10-2016
 * Time: 16:33
 * het bestand met daarin de query voer het invoeren van nieuwe fabrieken
 */
?>
<?php
if(isset($_POST['fabriek_toevoegen'])) {
    $fabriek_naam = $_POST['fabriek_naam'];

    $telefoon_nummer = $_POST['telefoon_nummer'];

    $sql = "INSERT INTO fabrieken (fabriek_naam, telefoon_nummer)
VALUES ('$fabriek_naam', '$telefoon_nummer')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

}
