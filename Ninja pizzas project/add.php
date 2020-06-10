<?php 


?>
<!DOCTYPE html>
<html lang="en">
    
    <?php include 'header.php'; ?>

    <section class="container gray-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="" class="white">
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