<?php
/*Name: Saidarsha Karunakaran
Date: 10/2/24
Course: IT202
Section: 001
Assignment Name: IT-202 Phase 1 Assignment: Login and Logout
Email: sk3526@njit.edu */
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}

session_unset();
session_destroy();

header("Location: index.php");
?>
