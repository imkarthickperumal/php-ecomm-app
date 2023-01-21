<?php 

  include('config/db_connect.php');
  
  // check GET request id param
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM pizza WHERE id = $id";

    // get the query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $pizzas = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($pizza);
  }

?>

<!DOCTYPE html>
<html>
     <?php require ('templates/header.php');?>


         <div class="container center">
            <?php if($pizzas):?>
                <h4><?php echo htmlspecialchars($pizzas['title']);?></h4>
                <p>Created by: <?php echo htmlspecialchars($pizzas['email']);?></p>
                <p><?php echo date($pizzas['created_at']);?></p>
                <h5>Ingredients:</h5>
                <p><?php echo htmlspecialchars($pizzas['ingredients']);?></p>
            <?php else:?>
                <h5>No Pizza Exists!</h5>
            <?php endif;?>
         </div>


     <?php require ('templates/footer.php');?>
</html>