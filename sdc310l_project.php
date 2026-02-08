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
            <?php include('header-for-template.php'); ?>
            </header>
            
            <!-- Body Section                                                                   #2-->
            <div class="row" style="padding-left: 0px;">
                
                <!-- Left-side Column Menu Section -->
                <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
                        <?php include('nav.php'); ?>
                    </ul>
                </nav>
                
                <!-- Center Column Content Section -->
                <div class="col-sm-8">
                    <h2 class="text-center">This is the Home Shopping Page</h2>
                    <!--Call and test database-->
                    <?php require_once __DIR__ . "/mysqli_connect.php"; 
                        $result = $dbcon->query("SELECT ProductId, ProductName, ProductDescription, ProductCost, InCart FROM products");
                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><br>{$row['ProductId']} <br></td>";
                                echo "<td>{$row['ProductName']} </td>";
                                echo "<td>{$row['ProductDescription']} </td>";
                                echo "<td>Price: USD {$row['ProductCost']} </td>";
                                echo "<td>{$row['InCart']} </td>";
                                echo "</tr>";
                            }

                        } else {
                            echo "Error";
                        }
                    ?>
                </div>
                
                <!-- Right-side Column Content Section                                              #3-->
                <aside class="col-sm-2">
                    <?php include('info-col.php'); ?>
                </aside>
            </div>
            
            <!-- Footer Content Section                                                         #4-->
            <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
                <?php include('footer.php'); ?> 
            </footer>
        </div>
    </body>
</html>