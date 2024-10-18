<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
include("bookcategory.php");
$BookCategories = Category::getCategories();
foreach($BookCategories as $category) {
   $BookCategoryID = $category->BookCategoryID;
   $name = $BookCategoryID . " - " . $category->BookCategoryCode . ", " . $category->BookCategoryName . ", " . $category->BookShelfNumber;
   echo "$name<br>";
}
?>
