<?php 
// connect to databse
$conn = mysqli_connect('localhost','karthick','karthick@2023','ecommerce');

// check connection
if (!$conn) {
    echo 'Database connection failed: ' . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<?php require ('templates/header.php');?>
<?php require ('templates/footer.php');?>

</html>