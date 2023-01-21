<?php 

  include('config/db_connect.php');

  // delete pizza details
  if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizza WHERE id = $id_to_delete";

    if(mysqli_query($conn,$sql)){
        // success
        header('Location: index.php');
    } else{
        // failure
        echo 'query error:' . mysqli_error($conn);
    }
  }
  
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


                <!-- DELETE FORM -->
                <form action="details.php" method="POST">
                    <input type="hidden" name="id_to_delete" value="<?php echo $pizzas['id']?>">
                    <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
                </form>
            <?php else:?>
                <h5>No Pizza Exists!</h5>
            <?php endif;?>
         </div>


     <?php require ('templates/footer.php');?>
</html>