<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/

include_once("bookproduct.php");

if (isset($_POST['BookProductID']) && is_numeric($_POST['BookProductID'])) {
    $BookProductID = $_POST['BookProductID'];
    $product = Product::findProduct($BookProductID);

    if ($product) {
        $result = $product->removeProduct();
        if ($result) {
            echo "<h2>Product $BookProductID removed</h2>\n";
        } else {
            echo "<h2>Sorry, problem removing product $BookProductID</h2>\n";
        }
    } else {
        echo "<h2>Product $BookProductID not found</h2>\n";
    }
} else {
    echo "<h2>No product ID specified or invalid ID</h2>\n";
}
?>
