<?php
$servername = "localhost";
$database = "u109030572_petvilla";
$username = "u109030572_adminpet";
$password = "mrJZP1212.";
 
// Create connection
 
$conn = new mysqli($servername, $username, $password, $database);
$conn->query("SET NAMES utf8");

if($conn->connect_error){
    die("Connection Failed...". $conn->$conn_error);
}
?>