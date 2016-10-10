<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 10-10-2016
 * Time: 11:59
 * schrijf bestand voor werknemers
 */
?>
<?php
if(isset($_POST['werknemertoevoegen'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];


    $sql = "INSERT INTO werknemer_login (username, password)
      VALUES ('$username', '$password')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
