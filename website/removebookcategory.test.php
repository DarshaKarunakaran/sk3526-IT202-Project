<?php
error_log("\$_GET " . print_r($_GET, true));
include("bookcategory.php");
$BookCategoryID = $_GET['BookCategoryID'];
$category = Category::findCategory($BookCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $BookCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $BookCategoryID</h2>\n";


?>
