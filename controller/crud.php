<?php
    require_once __DIR__ . "/mysqli_connect.php";

    function getPostInt($key) {
        return filter_input(INPUT_POST, $key, FILTER_VALIDATE_INT);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $product_id = getPostInt('ProductId');
        $quantity   = getPostInt('Quantity');

        if ($product_id === false || $quantity === false || $quantity < 0) {
            die("Invalid input.");
        }

        // Get product info
        $stmt = $dbcon->prepare("SELECT ProductCost, InCart FROM products WHERE ProductId = ?");
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $stmt->close();

        if (!$product) {
            die("Product not found.");
        }

        $price  = $product['ProductCost'];
        $inCart = $product['InCart'];

        // ADD
        if (isset($_POST['add'])) {
            $newCartQty = $inCart + $quantity;
        }

        // UPDATE
        if (isset($_POST['update'])) {
            $newCartQty = $quantity;
        }

        // REMOVE
        if (isset($_POST['remove'])) {
            $newCartQty = $inCart - $quantity;
            if ($newCartQty < 0) {
                $newCartQty = 0;
            }
        }

        $newTotal = $newCartQty * $price;

        $stmt = $dbcon->prepare("UPDATE products 
                                SET InCart = ?, TotalPrice = ? 
                                WHERE ProductId = ?");
        $stmt->bind_param("idi", $newCartQty, $newTotal, $product_id);
        $stmt->execute();
        $stmt->close();

        header("Location: sdc310l_project.php");
        exit();
    }
?>