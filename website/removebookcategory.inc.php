<?php
/* Name: Saidarsha Karunakaran
   Date: 10/18/2024
   IT202-001
   Phase 2 Assignment: CRUD Categories and Items
   Email: sk3526@njit.edu
*/

if (isset($_SESSION['login'])) {
   $BookCategoryID = $_POST['BookCategoryID']; 
   $category = Category::findCategory($BookCategoryID); 

   if ($category) {
       $result = $category->removeCategory();
       if ($result) {
           echo "<h2>Category $BookCategoryID removed successfully</h2>\n";
       } else {
           echo "<h2>Sorry, there was a problem removing category $BookCategoryID</h2>\n";
       }
   } else {
       echo "<h2>Category $BookCategoryID not found</h2>\n";
   }
} else {
   echo "<h2>Please log in first</h2>\n";
}
?>
