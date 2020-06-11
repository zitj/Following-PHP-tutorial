<?php 

    //connect to MySQLi database
    $connection = mysqli_connect('localhost', 'zitj', 'tjzi1389', 'ninja_pizza');

    if(!$connection){
        echo 'Connection error' . mysqli_connect_error();
    }
    
    //write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    //make query & get result
    $result = mysqli_query($connection, $sql);

    //fetch the resulting rows as an array

    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($pizzas);

?>
<!DOCTYPE html>
<html lang="en">
    
    <?php include 'header.php'; ?>

    <?php include 'footer.php'; ?>
    
</html>