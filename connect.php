	

<?php
/*
$servername = "localhost";
$username = "iautolab_girish";
$password = "girish12##";
$dbname = "iautolab_serverweb";
*/
$servername = "sql3.freemysqlhosting.net";
$username = "sql3347765";
$password = "7P9q27cwwx";
$dbname = "sql3347765";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}