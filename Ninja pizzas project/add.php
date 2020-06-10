<?php 

$errors = ['email' => '', 'title' => '', 'ingredients' => ''];
$email = $title = $ingredients = '';

if(isset($_POST['submit'])){
    
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required!';
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be valid';
        }
    }
    if(empty($_POST['title'])){
        $errors['title'] = 'A title is required!';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = 'At least one ingredient is required!';
    }else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be coma separated list';
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
        <input type="text" name="email"  placeholder="email" value="<?php echo htmlspecialchars($email)?>" autocomplete="off" >
        <div class="red-text"><?php echo $errors['email']?></div>
        <label for="">Pizza Title:</label>
        <input type="text" name="title" placeholder="title" value="<?php echo htmlspecialchars($title)?>" autocomplete="off" >
        <div class="red-text"><?php echo $errors['title']?></div>
        <label for="">Ingredients (comma separated):</label>
        <input type="text" name="ingredients" placeholder="ingredients" value="<?php echo htmlspecialchars($ingredients)?>" autocomplete="off" >
        <div class="red-text"><?php echo $errors['ingredients']?></div>
        <div class="center">
            <input id="submit" type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
    </section>

    <?php include 'footer.php'; ?>
    
</html>