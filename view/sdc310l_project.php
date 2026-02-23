<!DOCTYPE html>
<html lang="en">
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
                        <?php include('model/nav.php'); ?>
                    </ul>
                </nav>
                
                <!-- Center Column Content Section -->
                <div class="col-sm-8">
                    <h2 class="text-center">This is the Home Shopping Page</h2>

                    <!-- TABLE STRUCTURE -->
                    <table class="table table-bordered table-striped text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Product ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price (USD)</th>
                                <th>In Cart</th>
                            </tr>
                        </thead>
                        <tbody>

                    <!--Call and display database-->
                    <?php require_once __DIR__ . "../model/mysqli_connect.php"; 
                        $result = $dbcon->query("SELECT * FROM products");
                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>{$row['ProductId']}</td>";
                                echo "<td>{$row['ProductName']}</td>";
                                echo "<td>{$row['ProductDescription']}</td>";
                                echo "<td>{$row['ProductCost']}</td>";
                                echo "<td>{$row['InCart']}</td>";
                                echo "</tr>";
                            }

                        } else {
                            echo "<tr><td colspan='7'>No Products Found</td></tr>";
                        }
                    ?>
                        </tbody>
                    </table>
                    <?php include('controller/crud.php'); ?>
                </div>
                
                <!-- Right-side Column Content Section                                              #3-->
                <aside class="col-sm-2">
                    <?php include('info-col.php'); ?>
                </aside>
            </div>
            
            <!-- Footer Content Section                                                         #4-->
            <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
                <?php include('controller/footer.php'); ?> 
            </footer>
        </div>
    </body>
</html>