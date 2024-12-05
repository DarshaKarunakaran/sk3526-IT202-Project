<?php
/*Name: Saidarsha Karunakaran
Date: 11/15/2024
IT202-001
IT-202 Phase 4 Assignment: Input Filtering and CSS Styling
Email: sk3526@njit.edu
*/
if (!isset($_REQUEST['BookProductID']) or (!is_numeric($_REQUEST['BookProductID']))) {
?>
   <h2>You did not select a valid ProductID to view.</h2>
   <a href="index.php?content=listbookproducts">List Products</a>
<?php
} else {
   $BookProductID = $_REQUEST['BookProductID'];
   $product = Product::findProduct($BookProductID);
   if ($product) {
    echo "Product ID: " . htmlspecialchars($product->BookProductID) . "<br>";
    echo "Product Code: " . htmlspecialchars($product->BookProductCode) . "<br>";
    echo "Product Name: " . htmlspecialchars($product->BookProductName) . "<br>";
    echo "Product Wholesale Price: " . htmlspecialchars($product->BookWholesalePrice) . "<br>";
    echo "Product List Price: " . htmlspecialchars($product->BookListPrice) . "<br>";
    echo "Product Author: " . htmlspecialchars($product->BookProductAuthor) . "<br>";
    echo "Product Description: " . htmlspecialchars($product->BookDescription) . "<br>";

} else {
    echo "<h2>Sorry, category $BookProductID not found</h2>\n";
}
}
?>
