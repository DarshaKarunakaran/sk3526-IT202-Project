<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
require_once('database.php');

class Product {
    public $BookProductID;
    public $BookProductCode;
    public $BookProductName;
    public $BookProductAuthor;
    public $BookDescription;
    public $BookCategoryID;
    public $BookWholesalePrice;
    public $BookListPrice;
    public $DateCreated;

    function __construct($BookProductID, $BookProductCode, $BookProductName, $BookProductAuthor, $BookDescription, $BookCategoryID, $BookWholesalePrice, $BookListPrice, $DateCreated = null) {
        $this->BookProductID = $BookProductID;
        $this->BookProductCode = $BookProductCode;
        $this->BookProductName = $BookProductName;
        $this->BookProductAuthor = $BookProductAuthor;
        $this->BookDescription = $BookDescription;
        $this->BookCategoryID = $BookCategoryID;
        $this->BookWholesalePrice = $BookWholesalePrice;
        $this->BookListPrice = $BookListPrice;
        $this->DateCreated = $DateCreated ?: date('Y-m-d H:i:s'); // Default to current time if not provided
    }

    function saveProduct() {
        $db = getDB();
        $query = "INSERT INTO BookProducts (BookProductID, BookProductCode, BookProductName, BookProductAuthor, BookDescription, BookCategoryID, BookWholesalePrice, BookListPrice, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issssiids",
            $this->BookProductID,
            $this->BookProductCode,
            $this->BookProductName,
            $this->BookProductAuthor,
            $this->BookDescription,
            $this->BookCategoryID,
            $this->BookWholesalePrice,
            $this->BookListPrice,
            $this->DateCreated
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getProducts() {
        $db = getDB();
        $query = "SELECT * FROM BookProducts";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $products = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $product = new Product(
                    $row['BookProductID'],
                    $row['BookProductCode'],
                    $row['BookProductName'],
                    $row['BookProductAuthor'],
                    $row['BookDescription'],
                    $row['BookCategoryID'],
                    $row['BookWholesalePrice'],
                    $row['BookListPrice'],
                    $row['DateCreated']
                );
                array_push($products, $product);
            }
            $db->close();
            return $products;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function findProduct($BookProductID) {
        $db = getDB();
        $query = "SELECT * FROM BookProducts WHERE BookProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $BookProductID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $product = new Product(
                $row['BookProductID'],
                $row['BookProductCode'],
                $row['BookProductName'],
                $row['BookProductAuthor'],
                $row['BookDescription'],
                $row['BookCategoryID'],
                $row['BookWholesalePrice'],
                $row['BookListPrice'],
                $row['DateCreated']
            );
            $db->close();
            return $product;
        } else {
            $db->close();
            return NULL;
        }
    }

    function updateProduct() {
        $db = getDB();
        $query = "UPDATE BookProducts SET BookProductCode = ?, BookProductName = ?, BookProductAuthor = ?, BookDescription = ?, BookCategoryID = ?, BookWholesalePrice = ?, BookListPrice = ? WHERE BookProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "sssssiid",
            $this->BookProductCode,
            $this->BookProductName,
            $this->BookProductAuthor,
            $this->BookDescription,
            $this->BookCategoryID,
            $this->BookWholesalePrice,
            $this->BookListPrice,
            $this->BookProductID
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    function removeProduct() {
        $db = getDB();
        $query = "DELETE FROM BookProducts WHERE BookProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->BookProductID);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getTotalItems()
{
   $db = getDB();
   $query = "SELECT count(BookProductID) FROM BookProducts";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
}
static function getTotalListPrice()
{
   $db = getDB();
   $query = "SELECT sum(BookListPrice) FROM BookProducts";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
}
}
?>
