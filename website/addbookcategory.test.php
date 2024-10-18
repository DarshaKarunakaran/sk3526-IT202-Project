<?php
include("bookcategory.php");

$BookCategoryID = $_GET['BookCategoryID'];
$BookCategoryCode = $_GET['BookCategoryCode'];
$BookCategoryName = $_GET['BookCategoryName'];
$BookShelfNumber = $_GET['BookShelfNumber']; 

if (trim($BookCategoryID) == '' || !is_numeric($BookCategoryID)) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} elseif (trim($BookShelfNumber) == '' || !is_numeric($BookShelfNumber)) { 
    echo "<h2>Sorry, you must enter a valid shelf number</h2>\n";
} else {
    $BookCategory = new Category($BookCategoryID, $BookCategoryCode, $BookCategoryName, $BookShelfNumber);
    
    $result = $BookCategory->saveCategory();
    
    if ($result) {
        echo "<h2>New Category #$BookCategoryID successfully added</h2>\n";
        echo $BookCategory; 
    } else {
        echo "<h2>Sorry, there was a problem adding that category</h2>\n";
    }
}
?>
