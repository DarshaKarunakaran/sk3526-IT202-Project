<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
include_once("bookproduct.php");

if (isset($_SESSION['login'])) {
    $BookProductID = $_POST['BookProductID'] ?? null; 
    $BookProductCode = $_POST['BookProductCode'] ?? null;
    $BookProductName = $_POST['BookProductName'] ?? null;
    $BookProductAuthor = $_POST['BookProductAuthor'] ?? null;
    $BookDescription = $_POST['BookDescription'] ?? null;
    $BookCategoryID = $_POST['BookCategoryID'] ?? null;
    $BookWholesalePrice = $_POST['BookWholesalePrice'] ?? null;
    $BookListPrice = $_POST['BookListPrice'] ?? null;

    if ((trim($BookProductID) == '') or (!is_numeric($BookProductID))) {
        echo "<h2>Sorry, you must enter a valid Product ID number</h2>\n";
    } elseif ((trim($BookWholesalePrice) == '') or (!is_numeric($BookWholesalePrice))) {
        echo "<h2>Sorry, you must enter a valid Wholesale Price</h2>\n";
    } elseif ((trim($BookListPrice) == '') or (!is_numeric($BookListPrice))) {
        echo "<h2>Sorry, you must enter a valid List Price</h2>\n";
    } else {
        $product = new Product(
            $BookProductID,
            $BookProductCode,
            $BookProductName,
            $BookProductAuthor,
            $BookDescription,
            $BookCategoryID,
            $BookWholesalePrice,
            $BookListPrice
        );

        $result = $product->saveProduct();

        if ($result) {
            echo "<h2>New Product #$BookProductID successfully added</h2>\n";
            echo "<h3>Details:</h3>\n";
            echo "<p>Product Code: $BookProductCode</p>\n";
            echo "<p>Product Name: $BookProductName</p>\n";
            echo "<p>Author: $BookProductAuthor</p>\n";
            echo "<p>Description: $BookDescription</p>\n";
            echo "<p>Category ID: $BookCategoryID</p>\n";
            echo "<p>Wholesale Price: $BookWholesalePrice</p>\n";
            echo "<p>List Price: $BookListPrice</p>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding the product</h2>\n";
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
