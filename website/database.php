
<?php
/*Name: Saidarsha Karunakaran
Date: 10/2/24
Course: IT202
Section: 001
Assignment Name: IT-202 Phase 1 Assignment: Login and Logout
Email: sk3526@njit.edu */
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'sk3526';
   $username = 'sk3526';
   $password = 'PinkPony12@';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("You are connected to the $host database!");
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
 }
 //getDB();
?>
