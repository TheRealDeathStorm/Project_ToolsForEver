<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 10-10-2016
 * Time: 12:34
 * schrijf bestand voor managers
 */
?>
<?php
// Manager toevoegen

if(isset($_POST['managertoevoegen'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];


    $sql = "INSERT INTO manager_login (username, password)
    VALUES ('$username', '$password')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

