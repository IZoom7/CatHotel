<?php
$servername = "localhost";
$database = "u109030572_petvilla";
$username = "u109030572_adminpet";
$password = "mrJZP1212.";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "<script> console.log('database connected!') </script>";
mysqli_close($conn);
?>