<?php
include("bookcategory.php");
$BookCategories = Category::getCategories();
foreach($BookCategories as $category) {
   $BookCategoryID = $category->BookCategoryID;
   $name = $BookCategoryID . " - " . $category->BookCategoryCode . ", " . $category->BookCategoryName . ", " . $category->BookShelfNumber;
   echo "$name<br>";
}
?>
