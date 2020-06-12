<?php
include 'database_connection.php';

//check GET request id param
if(isset($_GET['id'])){
    
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    //create sql
    $sql = " SELECT * FROM pizzas WHERE id = $id ";

    //get the query result
    $result = mysqli_query($connection, $sql);

    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);
    
    mysqli_free_result($result);
    mysqli_close($connection);

    print_r($pizza);
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<h2>Details</h2>

<?php include 'footer.php'; ?>
</html>