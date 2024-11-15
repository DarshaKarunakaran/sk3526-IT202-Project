<?php
/*Name: Saidarsha Karunakaran
Date: 11/15/2024
IT202-001
IT-202 Phase 4 Assignment: Input Filtering and CSS Styling
Email: sk3526@njit.edu
*/
if (!isset($_POST['BookProductID']) || !is_numeric($_POST['BookProductID'])) {
?>
    <h2>You did not select a valid Book Product ID value</h2>
    <a href="index.php?content=listbookproducts">List products</a>
<?php
} else {
    $BookProductID = $_POST['BookProductID'];
    $product = Product::findProduct($BookProductID);

    if ($product) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $BookCategoryID = isset($_POST['BookCategoryID']) ? $_POST['BookCategoryID'] : $product->BookCategoryID;

            if (!is_numeric($BookCategoryID) || (int)$BookCategoryID != $BookCategoryID) {
                echo "<h2>Error: Invalid Category ID. Please enter a valid numeric Category ID.</h2>";
                exit;
            }

            $product->BookProductName = $_POST['BookProductName'] ?? $product->BookProductName;
            $product->BookCategoryID = $BookCategoryID;
            $product->BookProductCode = $_POST['BookProductCode'] ?? $product->BookProductCode;
            $product->BookProductAuthor = $_POST['BookProductAuthor'] ?? $product->BookProductAuthor;
            $product->BookDescription = $_POST['BookDescription'] ?? $product->BookDescription;
            $product->BookWholesalePrice = $_POST['BookWholesalePrice'] ?? $product->BookWholesalePrice;
            $product->BookListPrice = $_POST['BookListPrice'] ?? $product->BookListPrice;

            $result = $product->updateProduct();

            if ($result) {
                echo "<h2>Product $BookProductID updated successfully</h2>\n";
            } else {
                echo "<h2>Problem updating product $BookProductID</h2>\n";
            }
        }

        ?>
        <h2>Update Product <?php echo $product->BookProductID; ?></h2><br>
        <form name="products" action="index.php" method="post">
            <table>
                <tr>
                    <td>Book Product ID</td>
                    <td><?php echo $product->BookProductID; ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="BookProductName" value="<?php echo $product->BookProductName; ?>"></td>
                </tr>
                <tr>
                    <td>Category ID</td>
                    <td><input type="text" name="BookCategoryID" value="<?php echo $product->BookCategoryID; ?>"></td>
                </tr>
                <tr>
                    <td>List Price</td>
                    <td><input type="text" name="BookListPrice" value="<?php echo $product->BookListPrice; ?>"></td>
                </tr>
                <tr>
                    <td>Wholesale Price</td>
                    <td><input type="text" name="BookWholesalePrice" value="<?php echo $product->BookWholesalePrice; ?>"></td>
                </tr>
                <tr>
                    <td>Product Code</td>
                    <td><input type="text" name="BookProductCode" value="<?php echo $product->BookProductCode; ?>"></td>
                </tr>
                <tr>
                    <td>Author</td>
                    <td><input type="text" name="BookProductAuthor" value="<?php echo $product->BookProductAuthor; ?>"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="BookDescription" value="<?php echo $product->BookDescription; ?>"></td>
                </tr>
            </table><br><br>
            <input type="submit" name="answer" value="Update Product">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="BookProductID" value="<?php echo $BookProductID; ?>">
            <input type="hidden" name="content" value="changebookproduct">
        </form>
<?php
    } else {
?>
        <h2>Sorry, product <?php echo $BookProductID; ?> not found</h2>
        <a href="index.php?content=listbookproducts">List products</a>
<?php
    }
}
?>
