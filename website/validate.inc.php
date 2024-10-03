<?php
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$query = "SELECT firstName, lastName, pronouns FROM BooksManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName (" . $pronouns . ")";

if ($fetched && isset($name)) {
   echo "<h2>Welcome to Book Store Inventory Helper, $name </h2>\n";
   $_SESSION['login'] = $name;

   header("Location: index.php");
} 
else {
   echo "<h1>Book Store</h1>\n";
   echo "<h2>Sorry, login incorrect</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>
