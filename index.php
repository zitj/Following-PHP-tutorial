<?php 
$firstVariable = 'I am the first variable.';
define('CONSTANT_VARIABLE', 'I am the constant variable');
$stringOne = 'Concatination is a ';
$stringTwo = 'cool thing.';
$stringLength = strlen($stringOne);
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
    <h1><?php echo $stringOne . $stringTwo ?></h1>
    <h1><?php echo "$stringOne $stringTwo" ?></h1>
    <h1><?php echo "You have to quote \"like this\"." ?></h1>
    <h1><?php echo 'Or "like this".' ?></h1>
    <h1><?php echo "The first letter of concatanation is $stringOne[0]" ?></h1>
    <h1><?php echo "String length of \"stringOne\" is $stringLength" ?></h1>
    <h1><?php echo strtoupper($stringTwo) . ' function string to upper case' ?></h1>
    <h1><?php echo strtolower($stringTwo) . ' function string to lower case' ?></h1>
    <h1><?php echo str_replace('o', '0', $stringTwo) . ' function string replace' ?></h1>
    
</body>
</html>