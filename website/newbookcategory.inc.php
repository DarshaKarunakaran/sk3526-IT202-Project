<!-- /*Name: Saidarsha Karunakaran
Date: 11/01/2024
IT202-001
IT-202 Phase 3 Assignment: HTML Website Layout
Email: sk3526@njit.edu
*/ -->
<h2>Enter New Category Information</h2>
<form name="newbookcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="BookCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td><input type="text" name="BookCategoryCode" size="20"></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="BookCategoryName" size="50"></td>
       </tr>
       <tr>
           <td>Shelf Number: </td>
           <td><input type="text" name="BookShelfNumber" size="20"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addbookcategory">
</form>
