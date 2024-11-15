<?php
/*Name: Saidarsha Karunakaran
Date: 11/15/2024
IT202-001
IT-202 Phase 4 Assignment: Input Filtering and CSS Styling
Email: sk3526@njit.edu
*/
if (!isset($_REQUEST['BookCategoryID']) or (!is_numeric($_REQUEST['BookCategoryID']))) {
?>
   <h2>You did not select a valid categoryID to view.</h2>
   <a href="index.php?content=listbookcategories">List Categories</a>
<?php
} else {
   $categoryID = $_REQUEST['BookCategoryID'];
   $category = Category::findCategory($categoryID);
   if ($category) {
       echo $category;
       echo "<br><br>\n";
   } else {
       echo "<h2>Sorry, category $categoryID not found</h2>\n";
   }
}
?>
