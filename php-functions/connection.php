<?php

// Database configuration
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$dbname = 'outing_enhancemnet'; 

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check the connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
// Initialize the session
session_start();

