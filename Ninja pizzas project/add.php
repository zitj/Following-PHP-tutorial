<?php 
if(isset($_POST['submit'])){
    
    if(empty($_POST['email'])){
        echo 'An email is required!';
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email must be valid';
        }
    }
    if(empty($_POST['title'])){
        echo 'A title is required!';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            echo 'Title must be letters and spaces only';
        }
    }
    if(empty($_POST['ingredients'])){
        echo 'At least one ingredient is required!';
    }else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            echo 'Ingredients must be coma separated list';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    
    <?php include 'header.php'; ?>

    <section class="container gray-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" class="white" method="POST">
        <label for="">Your E-mail:</label>
        <input type="text" name="email"  placeholder="email" autocomplete="off">
        <label for="">Pizza Title:</label>
        <input type="text" name="title" placeholder="title" autocomplete="off">
        <label for="">Ingredients (comma separated):</label>
        <input type="text" name="ingredients" placeholder="ingredients" autocomplete="off">
        <div class="center">
            <input id="submit" type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
    </section>

    <?php include 'footer.php'; ?>
    
</html>