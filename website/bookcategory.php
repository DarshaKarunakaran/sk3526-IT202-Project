<?php
require_once('database.php');
class Category
{
   public $BookCategoryID;
   public $BookCategoryCode;
   public $BookCategoryName;
   public $BookShelfNumber;

   function __construct($BookCategoryID, $BookCategoryCode, $BookCategoryName, $BookShelfNumber)
   {
       $this->BookCategoryID = $BookCategoryID;
       $this->BookCategoryCode = $BookCategoryCode;
       $this->BookCategoryName = $BookCategoryName;
       $this->BookShelfNumber = $BookShelfNumber; 
   }

   function __toString()
   {
       $output = "<h2>Category Number: $this->BookCategoryID</h2>\n" .
           "<h2>$this->BookCategoryCode, $this->BookCategoryName</h2>\n" .
           "<h3>Shelf Number: $this->BookShelfNumber</h3>\n"; 
       return $output;
   }

   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO BookCategories (BookCategoryID, BookCategoryCode, BookCategoryName, BookShelfNumber) VALUES (?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->BookCategoryID,
           $this->BookCategoryCode,
           $this->BookCategoryName,
           $this->BookShelfNumber 
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }

   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM BookCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $BookCategories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['BookCategoryID'],
                   $row['BookCategoryCode'],
                   $row['BookCategoryName'],
                   $row['BookShelfNumber'] 
               );
               array_push($BookCategories, $category);
               unset($category);
           }
           $db->close();
           return $BookCategories;
       } else {
           $db->close();
           return NULL;
       }
   }

   static function findCategory($BookCategoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM BookCategories WHERE BookCategoryID = $BookCategoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['BookCategoryID'],
               $row['BookCategoryCode'],
               $row['BookCategoryName'],
               $row['BookShelfNumber'] 
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }

   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM BookCategories WHERE BookCategoryID = $this->BookCategoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE BookCategories SET BookCategoryCode = ?, BookCategoryName = ?, BookShelfNumber = ? " .
           "WHERE BookCategoryID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "ssii",
           $this->BookCategoryCode,
           $this->BookCategoryName,
           $this->BookShelfNumber, 
           $this->BookCategoryID
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
}
?>
