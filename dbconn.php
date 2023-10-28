<?php
$conn = new mysqli('localhost','u109030572_adminpet','mrJZP1212.','u109030572_petvilla');
$conn->query("SET NAMES utf8");
if($conn->connect_error){
    die("Connection Fail God damn it ". $conn->$conn_error);
}
?>