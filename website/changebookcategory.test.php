<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
include_once("bookcategory.php");
$BookCategoryID = $_GET['BookCategoryID'];
$category = Category::findCategory($BookCategoryID);
$category->BookCategoryID = $_GET['BookCategoryID'];
$category->BookCategoryCode = $_GET['BookCategoryCode'];
$category->BookCategoryName = $_GET['BookCategoryName'];
$category->BookShelfNumber = $_GET['BookShelfNumber'];

$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $BookCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $BookCategoryID</h2>\n";
}
?>
