<?php 

// import config
include ('config/db_connect.php');

// write a query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizza ORDER BY created_at';

// make a query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizza = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result memory
mysqli_free_result($result);

// close conncetion
mysqli_close($conn);

// print_r($pizza);

?>

<!DOCTYPE html>
<html lang="en">

<?php require ('templates/header.php');?>


<h4 class="center green-text">Pizza</h4>
<div class="container">
    <div class="row">
        <?php foreach($pizza as $pizzas):?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                     <div class="card-content center">
                       <h6><?php echo htmlspecialchars($pizzas['title']);?></h6>
                       <ul>
                        <?php foreach(explode(',',$pizzas['ingredients']) as $ing):?>
                            <li><?php echo htmlspecialchars($ing)?></li>
                        <?php endforeach?>
                       </ul>
                     </div>
                     <div class="card-action right-align">
                        <a class="brand-text" href="details.php?id=<?php echo $pizzas['id']?>">more info</a>
                     </div>
                </div>
            </div>
        <?php endforeach?>

        <?php if(count($pizzas)>=2):?>
            <p>There are 3 or more pizzas </p>
        <?php else :?>
            <p>There are less than 3 pizzas</p>
        <?php endif; ?>
    </div>
</div>


<?php require ('templates/footer.php');?>

</html>