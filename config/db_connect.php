<?php 
// connect to databse
$conn = mysqli_connect('localhost','karthick','karthick@2023','ecommerce');

// check connection
if (!$conn) {
    echo 'Database connection failed: ' . mysqli_connect_error();
}
?>