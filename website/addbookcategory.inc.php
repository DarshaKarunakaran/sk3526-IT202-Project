<?php
/*Name: Saidarsha Karunakaran
Date: 10/18/2024
IT202-001
Phase 2 Assignment: CRUD Categories and Items
Email: sk3526@njit.edu
*/
// include("category.php");
if (isset($_SESSION['login'])) {
    $BookCategoryID = $_POST['BookCategoryID'];
    if ((trim($BookCategoryID) == '') or (!is_numeric($BookCategoryID))) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
    } else {
        $BookCategoryCode = $_POST['BookCategoryCode'];
        $BookCategoryName = $_POST['BookCategoryName'];

        if (isset($_POST['BookShelfNumber']) && trim($_POST['BookShelfNumber']) !== '') {
            $BookShelfNumber = $_POST['BookShelfNumber']; 
            $category = new Category($BookCategoryID, $BookCategoryCode, $BookCategoryName, $BookShelfNumber);
            $result = $category->saveCategory();
            if ($result) {
                echo "<h2>New Category #$BookCategoryID successfully added</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that category</h2>\n";
            }
        } else {
            echo "<h2>Sorry, you must enter a valid shelf number</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
