<?php
error_log("\$_GET " . print_r($_GET, true));
include("bookproduct.php");
$BookProductID = $_GET['BookProductID'];
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
?>