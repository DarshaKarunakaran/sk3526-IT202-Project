<script language="javascript">
    /*Name: Saidarsha Karunakaran
Date: 11/15/2024
IT202-001
IT-202 Phase 4 Assignment: Input Filtering and CSS Styling
Email: sk3526@njit.edu
*/
    function listbox_dblclick() {
        document.products.displaybookproduct.click();
    }
    function button_click(target) {
        var userConfirmed = true;
        if (target == 1) {
            userConfirmed = confirm("Are you sure you want to remove this book product?");
        }
        if (userConfirmed) {
            if (target == 0) document.products.action = "index.php?content=displaybookproduct";
            if (target == 1) document.products.action = "index.php?content=removebookproduct";
            if (target == 2) document.products.action = "index.php?content=updatebookproduct";
        } else {
            alert("Action canceled.");
        }
    }
</script>

<h2>Select Book Product</h2>

<form name="products" method="post">
    <select name="BookProductID" size="20" ondblclick="listbox_dblclick()">
        <?php
        $products = Product::getProducts();
        foreach ($products as $product) {
            $BookProductID = $product->BookProductID;
            $name = $BookProductID . " - " . $product->BookProductName . ", " . $product->BookProductAuthor;
            echo "<option value=\"$BookProductID\">$name</option>\n";
        }
        ?>
    </select>
    <br>
    <input type="submit" onclick="button_click(0)" name="displaybookproduct" value="View Product">
    <input type="submit" onclick="button_click(1)" name="deletebookproduct" value="Delete Product">
    <input type="submit" onclick="button_click(2)" name="updatebookproduct" value="Update Product">
</form>
