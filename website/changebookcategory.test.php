<?php
include("bookcategory.php");
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
