<?php
/*Name: Saidarsha Karunakaran
Date: 11/15/2024
IT202-001
IT-202 Phase 4 Assignment: Input Filtering and CSS Styling
Email: sk3526@njit.edu
*/

if (isset($_SESSION['login'])) {
    $BookCategoryID = filter_input(INPUT_POST, 'BookCategoryID', FILTER_VALIDATE_INT);
    if (!$BookCategoryID) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
    } else {
        $BookCategoryCode = filter_input(INPUT_POST, 'BookCategoryCode', FILTER_SANITIZE_STRING);
        if (empty($BookCategoryCode)) {
            echo "<h2>Sorry, you must enter a valid category code</h2>\n";
        } else {
            $BookCategoryName = filter_input(INPUT_POST, 'BookCategoryName', FILTER_SANITIZE_STRING);
            if (empty($BookCategoryName)) {
                echo "<h2>Sorry, you must enter a valid category name</h2>\n";
            } else {
                $BookShelfNumber = filter_input(INPUT_POST, 'BookShelfNumber', FILTER_VALIDATE_INT);
                if (!$BookShelfNumber) {
                    echo "<h2>Sorry, you must enter a valid shelf number</h2>\n";
                } else {
                    $category = new Category($BookCategoryID, $BookCategoryCode, $BookCategoryName, $BookShelfNumber);
                    $result = $category->saveCategory();
                    if ($result) {
                        echo "<h2>New Category #$BookCategoryID successfully added</h2>\n";
                    } else {
                        echo "<h2>Sorry, there was a problem adding that category</h2>\n";
                    }
                }
            }
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
