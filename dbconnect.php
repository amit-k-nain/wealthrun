<?php
/*$servername = "localhost";
$username = "wealthru_wealth";
$password = "wealthru_wealth";
$dbname = "wealthru_wealth";*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wealthrun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

define('basrUrl', 'http://localhost:8666/wealthrun/');