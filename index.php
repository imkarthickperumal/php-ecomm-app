<?php 
// connect to databse
$conn = mysqli_connect('localhost','karthick','karthick@2023','ecommerce');

// check connection
if (!$conn) {
    echo 'Database connection failed: ' . mysqli_connect_error();
}

// write a query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizza';

// make a query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizza = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result memory
mysqli_free_result($result);

// close conncetion
mysqli_close($conn);

print_r($pizza);

?>

<!DOCTYPE html>
<html lang="en">

<?php require ('templates/header.php');?>
<?php require ('templates/footer.php');?>

</html>