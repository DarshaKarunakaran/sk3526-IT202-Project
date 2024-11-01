<!-- /*Name: Saidarsha Karunakaran
Date: 11/01/2024
IT202-001
IT-202 Phase 3 Assignment: HTML Website Layout
Email: sk3526@njit.edu
*/ -->
<?php
if (!isset($_POST['BookProductID']) or (!is_numeric($_POST['BookProductID']))) {
?>
   <h2>You did not select a valid Book Product ID value</h2>
   <a href="index.php?content=listbookproducts">List products</a>
<?php
} else {
   $BookProductID = $_POST['BookProductID'];
   $product = Product::findProduct($BookProductID); 
   if ($product) {
?>
       <h2>Update Product <?php echo $product->BookProductID; ?></h2><br>
       <form name="products" action="index.php" method="post">
           <table>
               <tr>
                   <td>Book Product ID</td>
                   <td><?php echo $product->BookProductID; ?></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="BookProductName" value="<?php echo $product->BookProductName; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
                   <td><input type="text" name="BookCategoryID" value="<?php echo $product->BookCategoryID; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                   <td><input type="text" name="BookListPrice" value="<?php echo $product->BookListPrice; ?>"></td>
               </tr>
               <tr>
                   <td>Wholesale Price</td>
                   <td><input type="text" name="BookWholesalePrice" value="<?php echo $product->BookWholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>Product Code</td>
                   <td><input type="text" name="BookProductCode" value="<?php echo $product->BookProductCode; ?>"></td>
               </tr>
               <tr>
                   <td>Author</td>
                   <td><input type="text" name="BookProductAuthor" value="<?php echo $product->BookProductAuthor; ?>"></td>
               </tr>
               <tr>
                   <td>Description</td>
                   <td><input type="text" name="BookDescription" value="<?php echo $product->BookDescription; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="BookProductID" value="<?php echo $BookProductID; ?>">
           <input type="hidden" name="content" value="changebookproduct">
       </form>
<?php
   } else {
?>
       <h2>Sorry, product <?php echo $BookProductID; ?> not found</h2>
       <a href="index.php?content=listbookproduct">List products</a>
<?php
   }
}
?>
