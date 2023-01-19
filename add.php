<?php 
// GET method sending date to the url 
// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }

// post method sending date to the url hidden securely
if (isset($_POST['submit'])) {
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['ingredients'];
}
?>


<!DOCTYPE html>
<html lang="en">

<?php require ('templates/header.php');?>

<section class="container grey-text">
    <h4 class="center">Add Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="email" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients:(comma seprated)</label>
        <input type="text" name="ingredients">
        <br><br>
        <div class="center">
             <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>



<?php require ('templates/footer.php');?>

</html>