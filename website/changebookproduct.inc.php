<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
include_once("bookproduct.php");

if (isset($_SESSION['login'])) {
    $BookProductID = $_POST['BookProductID'] ?? '';
    if (!$BookProductID) {
        die("Error: BookProductID is required.");
    }

    $product = Product::findProduct($BookProductID);
    if ($product) {
        $product->BookProductCode = $_POST['BookProductCode'] ?? $product->BookProductCode;
        $product->BookProductName = $_POST['BookProductName'] ?? $product->BookProductName;
        $product->BookProductAuthor = $_POST['BookProductAuthor'] ?? $product->BookProductAuthor;
        $product->BookDescription = $_POST['BookDescription'] ?? $product->BookDescription;
        $product->BookCategoryID = $_POST['BookCategoryID'] ?? $product->BookCategoryID;
        $product->BookWholesalePrice = $_POST['BookWholesalePrice'] ?? $product->BookWholesalePrice;
        $product->BookListPrice = $_POST['BookListPrice'] ?? $product->BookListPrice;

        $result = $product->updateProduct();
        if ($result) {
            echo "<h2>Product $BookProductID updated successfully</h2>\n";
        } else {
            echo "<h2>Problem updating product $BookProductID</h2>\n";
        }
    } else {
        echo "<h2>Product $BookProductID not found</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
