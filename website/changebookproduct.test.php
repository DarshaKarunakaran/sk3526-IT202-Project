<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
include("bookproduct.php");

$BookProductID = $_GET['BookProductID'] ?? '';
if (!$BookProductID) {
    die("Error: BookProductID is required.");
}

$product = Product::findProduct($BookProductID);

if ($product) {
    $product->BookProductCode = $_GET['BookProductCode'] ?? $product->BookProductCode;
    $product->BookProductName = $_GET['BookProductName'] ?? $product->BookProductName;
    $product->BookProductAuthor = $_GET['BookProductAuthor'] ?? $product->BookProductAuthor;
    $product->BookDescription = $_GET['BookDescription'] ?? $product->BookDescription;
    $product->BookCategoryID = $_GET['BookCategoryID'] ?? $product->BookCategoryID;
    $product->BookWholesalePrice = $_GET['BookWholesalePrice'] ?? $product->BookWholesalePrice;
    $product->BookListPrice = $_GET['BookListPrice'] ?? $product->BookListPrice;

    $result = $product->updateProduct();
    if ($result) {
        echo "<h2>Product $BookProductID updated successfully</h2>\n";
    } else {
        echo "<h2>Problem updating product $BookProductID</h2>\n";
    }
} else {
    echo "<h2>Product $BookProductID not found</h2>\n";
}
?>