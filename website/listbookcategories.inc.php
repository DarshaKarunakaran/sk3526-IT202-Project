<script language="javascript">
    function listbox_dblclick() {
        document.categories.displaybookcategory.click();
    }
    function button_click(target) {
        var userConfirmed = true;
        if (target == 1) {
            userConfirmed = confirm("Are you sure you want to remove this book category?");
        }
        if (userConfirmed) {
            if (target == 0) document.categories.action = "index.php?content=displaybookcategory";
            if (target == 1) document.categories.action = "index.php?content=removebookcategory";
            if (target == 2) document.categories.action = "index.php?content=updatebookcategory";
        } else {
            alert("Action canceled.");
        }
    }
</script>

<h2>Select Book Category</h2>
<!-- 
Name: Saidarsha Karunakaran
Date: 11/01/2024
IT202-001
IT-202 Phase 3 Assignment: HTML Website Layout
Email: sk3526@njit.edu
-->
<form name="categories" method="post">
    <select name="BookCategoryID" size="20" ondblclick="listbox_dblclick()">
        <?php

        $bookCategories = Category::getCategories();
        foreach ($bookCategories as $bookCategory) {
            $BookCategoryID = $bookCategory->BookCategoryID;
            $name = $BookCategoryID . " - " . $bookCategory->BookCategoryCode . ", " . $bookCategory->BookCategoryName;
            echo "<option value=\"$BookCategoryID\">$name</option>\n";
        }
        ?>
    </select>
    <br>
    <input type="submit" onclick="button_click(0)" name="displaybookcategory" value="View Book Category">
    <input type="submit" onclick="button_click(1)" name="deletebookcategory" value="Delete Book Category">
    <input type="submit" onclick="button_click(2)" name="updatebookcategory" value="Update Book Category">
</form>
