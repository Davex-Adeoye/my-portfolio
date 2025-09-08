<?php
$servername = "sql309.infinityfree.com"; // change to your host name
$username   = "if0_39687370";          // your DB username
$password   = "12Obohadeoye09";          // your DB password
$database   = "if0_39687370_alchemax";     // your DB name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully!";
?>


