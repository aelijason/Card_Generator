<?php 

$server = 'localhost';
$username = 'root';
$pass = '';
$db_name = 'my_db';
$db_table_name = 'my_db_table_registration';


// Create Connection 
$conn = new mysqli($server, $username, $pass, $db_name);

// check connection 
if ($conn->connect_error){
    die('Connection Failed: '. $conn->connect_error);
}
?>