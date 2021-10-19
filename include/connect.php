<?php

// SQL Info
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

    echo "Connection Error: " . $conn->connect_error;

    exit();

}

?>