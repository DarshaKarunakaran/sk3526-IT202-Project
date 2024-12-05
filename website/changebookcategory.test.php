<?php
/* Name: Saidarsha Karunakaran
   Date: 10/18/2024
   IT202-001
   Phase 2 Assignment: CRUD Categories and Items
   Email: sk3526@njit.edu
*/

include_once("bookcategory.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $BookCategoryID = $_POST['BookCategoryID'] ?? null;
    $category = Category::findCategory($BookCategoryID);

    if ($category) {
        $category->BookCategoryCode = htmlspecialchars($_POST['BookCategoryCode']);
        $category->BookCategoryName = htmlspecialchars($_POST['BookCategoryName']);
        $category->BookShelfNumber = htmlspecialchars($_POST['BookShelfNumber']);

        $result = $category->updateCategory();

        if ($result) {
            echo "<h2>Category $BookCategoryID updated successfully</h2>\n";
        } else {
            echo "<h2>Error: Unable to update category $BookCategoryID</h2>\n";
        }
    } else {
        echo "<h2>Category with ID $BookCategoryID not found</h2>\n";
    }
} else {
    echo "<h2>Invalid request method</h2>\n";
}
?>
