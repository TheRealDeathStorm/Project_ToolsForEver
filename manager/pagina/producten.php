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
include "../DBconnect.php";
include "schrijf/schrijfproducten.php";
?>
<html>
<head>
    <link href="../../css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main-container">
    <?php
        include "includes/header.php";
    ?>
    <h2> Producten </h2>

    <div class="main-content-producten">
        <div class="producten">
            <form method="post">
                    <p>
                        product naam:<br>
                        <input type="text" name="product_naam" placeholder="product naam">
                    </p>
                    <p>
                        product voorraad:<br>
                        <input type="text" name="product_voorraad" placeholder="product voorraad">
                    </p>
                    <p>
                        product prijs exclusief BTW:<br>
                        <input type="text" name="prijs_excl_btw" placeholder="prijs exc lbtw">
                    </p>
                    <p>
                        product prijs inclusief BTW:<br>
                        <input type="text" name="prijs_incl_btw" placeholder="prijs incl btw">
                    </p>
                    <p>
                        <button>
                            <input type="submit" name="product_toevoegen">
                        </button>
                    </p>
                <div class="product_update">
                    <h3> Product voorraad updaten </h3>
                        <?php
                        if(isset($_POST['update'])) {
                            $UpdateQuery = "UPDATE product_info SET product_id='$_POST[product_id]',
                                            product_naam='$_POST[product_naam]', product_voorraad='$_POST[product_voorraad]',
                                            product_prijs_excl='$_POST[product_prijs_excl]', product_prijs_incl='$_POST[product_prijs_incl]' WHERE product_id='$_POST[hidden]'";
                            mysqli_query($db, $UpdateQuery);
                        };

                        $sql = "SELECT * FROM product_info";
                        $myData = mysqli_query($db, $sql);

                        echo "<table border=1px solid black width=80%>
                                          <tr>
                                          <th>product id</th>
                                          <th>product naam</th>
                                          <th>product voorraad</th>
                                          <th>Prijs exclusief BTW</th>
                                          <th>Prijs inclusief BTW</th>
                                          </tr>";

                        while($record = mysqli_fetch_array($myData)) {
                            echo "<form method=post>";
                            echo "<tr>";
                            echo "<td>" . "<input type=text name=product_id value=" . $record['product_id'] . " </td>";
                            echo "<td>" . "<input type=text name=product_naam value=" . $record['product_naam'] . " </td>";
                            echo "<td>" . "<input type=text name=product_voorraad value=" . $record['product_voorraad'] . " </td>";
                            echo "<td>" . "<input type=text name=product_prijs_excl value=" . $record['product_prijs_excl'] . " </td>";
                            echo "<td>" . "<input type=text name=product_prijs_incl value=" . $record['product_prijs_incl'] . " </td>";
                            echo "<td>" . "<input type=hidden name=hidden value=" . $record['product_id'] . " </td>";
                            echo "<td>" . "<input type=submit name=update value=update" . " </td>";
                            echo "</tr>";
                            echo "</form>";
                            if ($record['product_voorraad'] < "100") {
                                echo "<script>alert('Pas op! de voorraad is bijna op')</script>";
                            }
                        }
                        echo "</table>";
                        ?>
                </div>
                <div class="product_info">
                    <form method="post">
                        <button type="submit" name="producten">Producten</button>
                        <br>
                        <?php
                        if(isset($_POST['producten'])) {
                            // Define the columns title and name in this array map.
                            $columns = array(
                                'Product id' => 'product_id',
                                'Product naam' => 'product_naam',
                                'Product voorraad' => 'product_voorraad',
                                'Product prijs excl. BTW' => 'product_prijs_excl',
                                'Product prijs incl. BTW' => 'product_prijs_incl'
                            );

                            // Run the query
                            $result= mysqli_query($db,"SELECT product_id, product_naam, product_voorraad, product_prijs_excl, product_prijs_incl FROM product_info");

                            // Output table header
                            echo "<table border=\"1px solid black\" width=\"80%\"><tr>";
                            foreach ($columns as $name => $col_name) {
                                echo "<th>$name</th>";
                            }
                            echo "</tr>";

                            // Output rows
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                foreach ($columns as $name => $col_name) {
                                    echo "<td style=\"text-align:center;\">". $row[$col_name] . "</td>";
                                }
                                echo "</tr>";
                            }
                            // Close table
                            echo "</table>";
                        }
                        ?>
                    </form>
                </div>
        </div>
    </div>

    <div class="clearfix">

    </div>

    <?php
        include "includes/footer.php";
    ?>
</div>
</body>
</html>


