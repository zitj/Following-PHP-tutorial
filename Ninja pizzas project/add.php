<?php 
if(isset($_POST['submit'])){
    
    if(empty($_POST['email'])){
        echo 'An email is required!';
    }else{
        echo htmlspecialchars($_POST['email']);
    }
    if(empty($_POST['title'])){
        echo 'A title is required!';
    }else{
        echo htmlspecialchars($_POST['title']);
    }
    if(empty($_POST['ingredient'])){
        echo 'At least one ingredient is required!';
    }else{
        echo htmlspecialchars($_POST['ingredient']);
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
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
    </section>

    <?php include 'footer.php'; ?>
    
</html>