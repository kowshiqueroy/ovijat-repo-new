<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="KHORIDDAR";


// Create connection
$conn = new mysqli($hostname, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create connection
$conn = new mysqli($hostname, $username, $password,$dbname);
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database ".$dbname." created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS COMPANY (
    COMPANY_NAME VARCHAR(50) NOT NULL,
    USER_TYPE VARCHAR(20) NOT NULL,
    USER_EMAIL VARCHAR(50) PRIMARY KEY,
    USER_PASSWORD VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table COMPANY created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }


?>