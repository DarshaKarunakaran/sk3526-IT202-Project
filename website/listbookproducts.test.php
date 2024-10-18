<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
include("bookproduct.php");

$products = Product::getProducts();

if ($products) {
    echo "<h2>Book Products</h2>\n";
    echo "<table border='1'>\n";
    echo "<tr><th>ID</th><th>Code</th><th>Name</th><th>Author</th><th>Category</th><th>Wholesale Price</th><th>List Price</th></tr>\n";
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>{$product->BookProductID}</td>";
        echo "<td>{$product->BookProductCode}</td>";
        echo "<td>{$product->BookProductName}</td>";
        echo "<td>{$product->BookProductAuthor}</td>";
        echo "<td>{$product->BookCategoryID}</td>";
        echo "<td>{$product->BookWholesalePrice}</td>";
        echo "<td>{$product->BookListPrice}</td>";
        echo "</tr>\n";
    }
    echo "</table>\n";
} else {
    echo "<h2>No products found</h2>\n";
}
?>