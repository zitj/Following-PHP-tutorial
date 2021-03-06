<?php 

    include('database_connection.php');    
    
    //write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    //make query & get result
    $result = mysqli_query($connection, $sql);

    //fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($connection)

?>
<!DOCTYPE html>
<html lang="en">
    
    <?php include 'header.php'; ?>

    <h4 class="heading grey-text center">Pizzas!</h4>
    <div class="container">
        <div class="row">

        <?php foreach($pizzas as $pizza): ?>
            <?php $arrayOfIngredients = explode(',', $pizza['ingredients']);?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                <img src="img/pizza.svg" alt="pizza_img" class="pizza">
                    <div class="card-content center">
                        <h5><?php echo htmlspecialchars($pizza['title'])?></h5>
                        <ul>
                            <?php foreach($arrayOfIngredients as $ingredient):?>
                                <li><?php echo htmlspecialchars($ingredient);?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div><!-- end .card-content -->
                    <div class="card-action right-align">
                        <a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
                    </div><!-- end .card-action -->
                    </div><!-- end .card.z-depth-0 -->
            </div> <!--end .col -->
        
        <?php endforeach; ?>
        </div><!-- end .row -->    
    </div><!-- end .container -->

    <?php include 'footer.php'; ?>
    
</html>