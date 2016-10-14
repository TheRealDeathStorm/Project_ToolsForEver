<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 13-10-2016
 * Time: 17:33
 * het bestand met daarin de query voor het invoeren van nieuwe filialen
 */
?>
<?php
if(isset($_POST['filiaal_toevoegen'])) {
    $filiaal_naam = $_POST['filiaal_naam'];

    $sql = "INSERT INTO filialen(Filiaal_naam)
VALUES ('$filiaal_naam')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

}
