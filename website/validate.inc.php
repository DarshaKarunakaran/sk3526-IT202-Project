<?php
/*Name: Saidarsha Karunakaran
Date: 10/2/24
Course: IT202
Section: 001
Assignment Name: IT-202 Phase 1 Assignment: Login and Logout
Email: sk3526@njit.edu */
require_once('database.php');
$emailAddress = htmlspecialchars($_POST['emailAddress']);
$password = $_POST['password'];
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
$query = "SELECT firstName, lastName, pronouns FROM BooksManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName (" . $pronouns . ") $emailAddress";

if ($fetched && isset($name)) {
   echo "<h2>Welcome to Book Store Inventory Helper, $name $emailAddress</h2>\n";
   $_SESSION['login'] = $name;

   header("Location: index.php");
} 
else {
   echo "<h1>Book Store</h1>\n";
   echo "<h2>Sorry, login incorrect</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
} else {
   echo "<h2>Please enter a valid email address</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}

?>
