<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 10-10-2016
 * Time: 12:34
 * Schijf bestand voor beheerders
 */
?>
<?php
// Beheerder toevoegen

if(isset($_POST['beheerdertoevoegen'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];


    $sql = "INSERT INTO beheer_login (username, password)
VALUES ('$username', '$password')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

