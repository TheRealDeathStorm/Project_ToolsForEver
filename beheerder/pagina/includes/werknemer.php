<?php
/**
 * Created by PhpStorm.
 * User: Mikey
 * Date: 13-10-2016
 * Time: 20:05
 */
?>

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
        <?php

        if(isset($_POST['update'])) {
            $UpdateQuery = "UPDATE werknemer_login SET User_id='$_POST[id]', username='$_POST[username]', password='$_POST[password]' WHERE username='$_POST[hidden]'";
            mysqli_query($db, $UpdateQuery);
        };

        $sql = "SELECT * FROM werknemer_login";
        $myData = mysqli_query($db, $sql);

        echo "<table border=1px solid black width=80%>
                          <tr>
                          <th>ID</th>
                          <th>username</th>
                          <th>password</th>
                          </tr>";

        while($record = mysqli_fetch_array($myData)) {
            echo "<form action=admin.php method=post>";
            echo "<tr>";
            echo "<td>" . "<input type=text name=id value=" . $record['User_id'] . " </td>";
            echo "<td>" . "<input type=text name=username value=" . $record['username'] . " </td>";
            echo "<td>" . "<input type=text name=password value=" . $record['password'] . " </td>";
            echo "<td>" . "<input type=hidden name=hidden value=" . $record['username'] . " </td>";
            echo "<td>" . "<input type=submit name=update value=update" . " </td>";
            echo "</tr>";
            echo "</form>";
        }

        echo "</table>";
        ?>
    </div>
    <div class="verwijderen wv">
        <h3> Werknemer accounts verwijderen </h3>
        <?php

        if(isset($_POST['delete'])) {
            $DeleteQuery = "DELETE FROM werknemer_login WHERE username='$_POST[hidden]'";
            mysqli_query($db, $DeleteQuery);
        };

        $sql = "SELECT * FROM werknemer_login";
        $myData = mysqli_query($db, $sql);

        echo "<table border=1px solid black width=20%>
                          <tr>
                          <th>ID</th>
                          <th>username</th>
                          <th>password</th>
                          </tr>";

        while($record = mysqli_fetch_array($myData)) {
            echo "<form action=admin.php method=post>";
            echo "<tr>";
            echo "<td>" . "<input type=text name=id value=" . $record['User_id'] . " </td>";
            echo "<td>" . "<input type=text name=username value=" . $record['username'] . " </td>";
            echo "<td>" . "<input type=text name=password value=" . $record['password'] . " </td>";
            echo "<td>" . "<input type=hidden name=hidden value=" . $record['username'] . " </td>";
            echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
            echo "</tr>";
            echo "</form>";
        }

        echo "</table>";
        ?>
    </div>

