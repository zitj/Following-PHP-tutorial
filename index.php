<?php 
$firstVariable = 'I am the first variable.';
define('CONSTANT_VARIABLE', 'I am the constant variable');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php tutorial ever</title>
</head>
<body>
    <h1><?php echo $firstVariable ?></h1>
    <h1><?php echo CONSTANT_VARIABLE ?></h1>
</body>
</html>