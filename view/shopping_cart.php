<?php
require_once __DIR__ . "/mysqli_connect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SDC310Lab Project</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS File  -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    </head>
    <body>

        <?php
        $result = $dbcon->query("SELECT * FROM products");

        ?>
        <div class="container" style="margin-top:30px">
            <!-- Header Section                                                                 #1-->
            <header class="jumbotron text-center row"
            style="margin-bottom:2px; background:linear-gradient(white, #0073e6);padding:20px;">
            <?php include('controller/header-for-template.php'); ?>
            </header>
        <!-- Body Section                                                                   #2-->
            <div class="row" style="padding-left: 0px;">
                
                <!-- Left-side Column Menu Section -->
                <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
                        <?php include('model/nav2.php'); ?>
                    </ul>
                </nav>
            
                <!-- Center Column Content Section -->
                <div class="col-sm-8">
                    <h2 class="text-center">This is the Shopping Cart Page</h2>
                <?php 
                    while ($row = $result->fetch_assoc()) {
                ?>
                    <div style="border:1px solid black; padding:10px; margin-bottom:10px;">

                                <strong><?php echo $row['ProductName']; ?></strong><br>
                                Price: $<?php echo number_format($row['ProductCost'], 2); ?><br>
                                In Cart: <?php echo $row['InCart']; ?><br>
                                Item Total: $<?php echo number_format($row['TotalPrice'], 2); ?><br>

                                <form method="POST" action="../controller/crud.php">
                                    <input type="hidden" name="ProductId" value="<?php echo $row['ProductId']; ?>">

                                    Quantity:
                                    <input type="number" name="Quantity" min="1" required>

                                    <button type="submit" name="add">Add</button>
                                    <button type="submit" name="update">Update</button>
                                    <button type="submit" name="remove">Remove</button>
                                </form>

                            </div>
                    <?php 
                    }
                    ?>
                    <h2>Cart Summary</h2>
        <?php
            $result = $dbcon->query("SELECT SUM(TotalPrice) AS GrandTotal FROM products WHERE InCart > 0");
            $row = $result->fetch_assoc();
            $grandTotal = $row['GrandTotal'] ?? 0;

            echo "<h3>Total Price of All Items: $" . number_format($grandTotal, 2) . "</h3>";
        ?>
                        </tbody>
                    </table>
                </div>
                <!-- Right-side Column Content Section                                              #3-->
                <aside class="col-sm-2">
                    <?php include('info-col.php'); ?>
                </aside>
            </div>

        </div>

        <hr>

            <!-- Footer Content Section                                                         #4-->
            <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
                <?php include('controller/footer.php'); ?> 
            </footer>
    </body>
</html>