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
    if (!$BookProductID || !is_numeric($BookProductID)) {
        die("A valid BookProductID is required.");
    }

    $product = Product::findProduct($BookProductID);
    if ($product) {
        $BookProductCode = $_POST['BookProductCode'] ?? $product->BookProductCode;
        $BookProductName = $_POST['BookProductName'] ?? $product->BookProductName;
        $BookProductAuthor = $_POST['BookProductAuthor'] ?? $product->BookProductAuthor;
        $BookDescription = $_POST['BookDescription'] ?? $product->BookDescription;
        
        $BookCategoryID = $_POST['BookCategoryID'] ?? $product->BookCategoryID;
        if (!is_numeric($BookCategoryID) || (int)$BookCategoryID != $BookCategoryID) {
            die("Invalid BookCategoryID. Please enter a valid numeric value.");
        }
        
        $BookWholesalePrice = $_POST['BookWholesalePrice'] ?? $product->BookWholesalePrice;
        if (!is_numeric($BookWholesalePrice)) {
            die("Invalid Wholesale Price. Please enter a valid number.");
        }
        
        $BookListPrice = $_POST['BookListPrice'] ?? $product->BookListPrice;
        if (!is_numeric($BookListPrice)) {
            die("Invalid List Price. Please enter a valid number.");
        }

        $product->BookProductCode = $BookProductCode;
        $product->BookProductName = $BookProductName;
        $product->BookProductAuthor = $BookProductAuthor;
        $product->BookDescription = $BookDescription;
        $product->BookCategoryID = $BookCategoryID;
        $product->BookWholesalePrice = $BookWholesalePrice;
        $product->BookListPrice = $BookListPrice;

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
