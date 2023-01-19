<!DOCTYPE html>
<html lang="en">

<?php require ('templates/header.php');?>

<section class="container grey-text">
    <h4 class="center">Add Pizza</h4>
    <form class="white" action="add.php" method="GET">
        <label>Your Email:</label>
        <input type="email" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients:</label>
        <input type="text" name="ingredients">
        <br><br>
        <div class="center">
             <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>



<?php require ('templates/footer.php');?>

</html>