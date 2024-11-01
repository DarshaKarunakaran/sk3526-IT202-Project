<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
error_log("\$_GET " . print_r($_GET, true));
include_once("bookcategory.php");
$BookCategoryID = $_GET['BookCategoryID'];
$category = Category::findCategory($BookCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $BookCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $BookCategoryID</h2>\n";


?>
