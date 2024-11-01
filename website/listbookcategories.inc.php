<h2>Select Category</h2>
<!-- /*Name: Saidarsha Karunakaran
Date: 11/01/2024
IT202-001
IT-202 Phase 3 Assignment: HTML Website Layout
Email: sk3526@njit.edu
*/ -->
<form name="categories" method="post">
   <select name="BookCategoryID" size="20">
       <?php
   //    include("category.php");
   
       $categories = Category::getCategories();
       foreach ($categories as $category) {
           $BookCategoryID = $category->BookCategoryID;
           $name = $BookCategoryID . " - " . $category->BookCategoryCode . ", " . $category->BookCategoryName;
           echo "<option value=\"$BookCategoryID\">$name</option>\n";
       }
       ?>
   </select>
</form>
