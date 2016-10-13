<?php
/**
 * Created by PhpStorm.
 * User: Niels en Mike
 * Date: 13-10-2016
 * Time: 17:58
 * de orders pagina
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Niels en Mike
 * Date: 10-10-2016
 * Time: 11:51
 * De pagina met de verschillende locaties
 */
?>
<?php
include "../DBconnect.php";
include "schrijf/schrijforders.php"
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
    <h2> De orders </h2>

    <div class="main-content-orders">
        <div class="orders">
            <form method="post">
                <p>
                    Filiaal naam:<br>
                    <input type="text" name="filiaal_naam" placeholder="filiaal naam">
                </p>
                <p>
                    Product naam:<br>
                    <input type="text" name="product_naam" placeholder="product naam">
                </p>
                <p>
                    Order aantal:<br>
                    <input type="text" name="order_aantal" placeholder="order aantal">
                </p>
                <p>
                    Order prijs:<br>
                    <input type="text" name="order_prijs" placeholder="order prijs">
                </p>
                <p>
                    <button>
                        <input type="submit" name="order_toevoegen">
                    </button>
                </p>

                <div class="locaties_info">
                    <form method="post">
                        <button type="submit" name="orders">Orders</button><br>
                        <?php
                        if(isset($_POST['orders'])) {
                            // Define the columns title and name in this array map.
                            $columns = array(
                                'Order id' => 'Order_id',
                                'Filiaal naam' => 'filiaal_naam',
                                'Product naam' => 'product_naam',
                                'Order aantal' => 'order_aantal',
                                'Order prijs' => 'order_prijs'
                            );

                            // Run the query
                            $result= mysqli_query($db,"SELECT Order_id, filiaal_naam, product_naam, order_aantal, order_prijs FROM order_info");

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



