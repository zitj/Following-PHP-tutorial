<?php 

// Strings

$firstVariable = 'I am the first variable.';
define('CONSTANT_VARIABLE', 'I am the constant variable');
$stringOne = 'Concatination is a ';
$stringTwo = 'cool thing.';
$stringLength = strlen($stringOne);

// Numbers
$radius = 20;
$pi = 3.14;

//basic operators are +, -, *, /, ** 
//order of operation((B) I** D/ M* A+ S-) 

//examples

// echo 2 * (9 - 5) / 2;
// echo $radius**2 * $pi; 

//increment and decrement operators
$radius--;
$radius++;
// echo $radius;

//shorthand operators
$radius += 100;
$radius -= 100;
$radius *= 100;
$radius /= 100;
// echo $radius;

//number functions
//echo floor($pi);
// echo ceil($pi);
// echo pi();

// Indexed Arrays 

$peopleGroupOne = ["Stephan", "Stacey", "John", "Hong-Xi"];
$peopleGroupTwo = array("Marley", "Bob", "Lucita", "Carrey");
$peopleGroupThree = array_merge($peopleGroupOne, $peopleGroupTwo);
// echo $peopleGroupOne[2];
// echo print_r($peopleGroupTwo);
// echo print_r(array_merge($peopleGroupOne, $peopleGroupTwo));
$peopleGroupThree[] = "Sally";
// array_push($peopleGroupThree, "Dally");
// echo print_r($peopleGroupThree);


// Associative Arrays

$fruitColorGroupOne = ["banana" => "yellow", "orange"=>"orange"];
$fruitColorGroupTwo = array("apple" => "green", "cherry"=>"dark red");
// echo $fruitColorGroupOne[orange];
// echo $fruitColorGroupTwo[apple];
$fruitColorGroupThree = array_merge($fruitColorGroupOne, $fruitColorGroupTwo);
$fruitColorGroupThree["grapes"] = "purple"; 
// echo print_r($fruitColorGroupThree);
// echo count($fruitColorGroupThree);

// Multi-dimensional Arrays

$products = [
    ["piece" => "t-shirt", "brand" => "calvin klein", "material" => "cotton", "price" => 299],
    ["piece" => "sweater", "brand" => "lacoste", "material" => "wool", "price" => 649],
    ["piece" => "jeans", "brand" => "levis", "material" => "texas", "price" => 120]
];

$products[] = ["piece" => "shoes", "brand" => "paccioti", "material" => "leather", "price" => 2450];
// echo $products[2]["price"];
// echo print_r($products);
// echo count($products);

$poppedProduct = array_pop($products);
// echo print_r($poppedProduct);

// LOOPS IN PHP

$writers = ["Dostoyevsky", "Tolstoy", "Orwel"];

// for($i = 0; $i < count($writers); $i++){
//     echo $writers[$i] . "<br>";
// }
// echo "<br>";
// foreach ($writers as $writer){
//     echo $writer . "<br>";
// }

// foreach ($products as $product){
//     echo strtoupper($product["brand"]) . " " . $product["piece"] . " - " . $product["price"] . " $" . "<br>";
// }

// Functions

function sayHello($name = "lad", $time = "day"){
    echo "Good $time $name ";
}
// sayHello("Mr. Bronson", "morning");

function formatArgument($argument){
    return "Good {$argument["time"]} {$argument["name"]}";
}

$formatedArgumentVariable = formatArgument(["time" => "morning" , "name" => "Mr.Bronson"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>h1{color:#333333;font-size:1.5em;}</style>
    <title>My first php tutorial ever</title>
</head>
<body>
    <!-- <h1><?php echo $firstVariable ?></h1>
    <h1><?php echo CONSTANT_VARIABLE ?></h1>
    <h1><?php echo $stringOne . $stringTwo ?></h1>
    <h1><?php echo "$stringOne $stringTwo" ?></h1>
    <h1><?php echo "You have to quote \"like this\"." ?></h1>
    <h1><?php echo 'Or "like this".' ?></h1>
    <h1><?php echo "The first letter of concatanation is $stringOne[0]" ?></h1>
    <h1><?php echo "String length of \"stringOne\" is $stringLength" ?></h1>
    <h1><?php echo strtoupper($stringTwo) . ' function string to upper case' ?></h1>
    <h1><?php echo strtolower($stringTwo) . ' function string to lower case' ?></h1>
    <h1><?php echo str_replace('o', '0', $stringTwo) . ' function string replace' ?></h1> -->

    <h4><?php echo $formatedArgumentVariable ?></h4>
    <h1>PRODUCTS</h1>

    <ul>
        <?php foreach($products as $product){ ?>
        <?php if($product["price"] > 200){?>
        
            <h3><?php echo strtoupper($product["brand"]) . " " . $product["piece"] ?></h3>
            <p><?php echo "$ " . $product["price"]?></p>
            <button>Add</button>
        <?php } ?>
        <?php } ?>
    </ul>
    
</body>
</html>