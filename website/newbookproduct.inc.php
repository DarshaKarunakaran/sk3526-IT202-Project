<!-- /*Name: Saidarsha Karunakaran
Date: 11/01/2024
IT202-001
IT-202 Phase 3 Assignment: HTML Website Layout
Email: sk3526@njit.edu
*/ -->
<h2>Enter New Book Product Information</h2>
<form name="newbookproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="BookProductID" size="4"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="BookProductName" size="20"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="BookCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="BookListPrice" size="10"></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="text" name="BookWholesalePrice" size="10"></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="BookProductCode" size="10"></td>
       </tr>
       <tr>
           <td>Author:</td>
           <td><input type="text" name="BookProductAuthor" size="10"></td>
       </tr>
       <tr>
           <td>Description: </td>
           <td><input type="text" name="BookDescription" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addbookproduct">
</form>
