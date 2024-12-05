<?php
/*Name: Saidarsha Karunakaran
Date: 11/15/2024
IT202-001
IT-202 Phase 4 Assignment: Input Filtering and CSS Styling
Email: sk3526@njit.edu
*/

if (!isset($_POST['BookCategoryID']) || !is_numeric($_POST['BookCategoryID'])) {
?>
    <h2>You did not select a valid Book Category ID value</h2>
    <a href="index.php?content=listbookcategories">List Categories</a>
<?php
} else {
    $BookCategoryID = $_POST['BookCategoryID'];
    $category = Category::findCategory($BookCategoryID);

    if ($category) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $BookCategoryID = isset($_POST['BookCategoryID']) ? $_POST['BookCategoryID'] : $product->BookCategoryID;

            if (!is_numeric($BookCategoryID) || (int)$BookCategoryID != $BookCategoryID) {
                echo "<h2>Error: Invalid Category ID. Please enter a valid numeric Category ID.</h2>";
                exit;
            }

            $category->BookCategoryName = $_POST['BookCategoryName'] ?? $category->BookCategoryName;
            $category->BookCategoryID = $BookCategoryID;
            $category->BookCategoryCode = $_POST['BookCategoryCode'] ?? $category->BookCategoryCode;
            $catgeory->BookShelfNumber = $_POST['BookShelfNumber'] ?? $category->BookShelfNumber;

            $result = $category->updateCategory();

            if ($result) {
                echo "<h2>Product $BookCategoryID updated successfully</h2>\n";
            } else {
                echo "<h2>Problem updating product $BookCategoryID</h2>\n";
            }
        }

        ?>
        <h2>Update Category <?php echo $category->BookCategoryID; ?></h2><br>
        <form name="categories" action="index.php?content=changebookcategory" method="post">
    <table>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="BookCategoryName" value="<?php echo $category->BookCategoryName; ?>"></td>
        </tr>
        <tr>
            <td>Category ID</td>
            <td><input type="text" name="BookCategoryID" value="<?php echo $category->BookCategoryID; ?>"></td>
        </tr>
        <tr>
            <td>Category Code</td>
            <td><input type="text" name="BookCategoryCode" value="<?php echo $category->BookCategoryCode; ?>"></td>
        </tr>
    </table><br><br>
    <input type="submit" name="answer" value="Update Category">
    <input type="submit" name="answer" value="Cancel">
    <input type="hidden" name="BookCategoryID" value="<?php echo $BookCategoryID; ?>">
    <input type="hidden" name="content" value="changebookcategory">
</form>

<?php
    } else {
?>
        <h2>Sorry, category <?php echo $BookCategoryID; ?> not found</h2>
        <a href="index.php?content=listbookcategories">List Categories</a>
<?php
    }
}
?>
