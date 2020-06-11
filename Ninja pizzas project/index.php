<?php 

    //connect to MySQLi database
    $connection = mysqli_connect('localhost', 'zitj', 'tjzi1389', 'ninja_pizza');

    if(!$connection){
        echo 'Connection error' . mysqli_connect_error();
    }
    
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

    <h4 class="grey-text center">Pizzas!</h4>
    <div class="container">
        <div class="row">

        <?php foreach($pizzas as $pizza) { ?>
            <?php $arrayOfIngredients = explode(',', $pizza['ingredients']);?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title'])?></h6>
                        <ul>
                            <?php foreach($arrayOfIngredients as $ingredient){?>
                                <li><?php echo htmlspecialchars($ingredient);?></li>
                            <?php }?>
                        </ul>
                    </div><!-- end .card-content -->
                    <div class="card-action right-align">
                        <a class="brand-text" href="#">more info</a>
                    </div><!-- end .card-action -->
                    </div><!-- end .card.z-depth-0 -->
            </div> <!--end .col -->
        
        <?php } ?>
        </div><!-- end .row -->    
    </div><!-- end .container -->

    <?php include 'footer.php'; ?>
    
</html>