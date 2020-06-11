<?php 

    //connect to MySQLi database
    $connection = mysqli_connect('localhost', 'zitj', 'tjzi1389', 'ninja_pizza');

    if(!$connection){
        echo 'Connection error' . mysqli_connect_error();
    }


?>
<!DOCTYPE html>
<html lang="en">
    
    <?php include 'header.php'; ?>

    <?php include 'footer.php'; ?>
    
</html>