<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Basic PHP Syntax</h1>
    <?php
    echo "Hello World!"
    ?>
    <br>
    <br>
    <!-- <h1>Creating/Declaring php variables</h1> -->
 
    <?php
    $txt = "Hello World";
    $x = 5;
    $y = 10.5;
    ?>

    <h1>Declaring Variable Output</h1>
    <?php
    $nima = "Chicken";
    echo "I Love $nima";
    ?>
<br>
    <?php
     $x = 5;
     $y = 4;
     echo $x + $y;
      ?>
      <br>
      <h1>Global Scope Variable</h1>
      <?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
<br>
<h1>PHP echo statement</h1>
<h2>Declaring Text</h2>
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
<br>
<h2>Declaring Variable</h2>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>
<br>
<h1>PHP String</h1>
<?php
$x = "Hello World!";
$y = "Hellow World!";

echo $x;
echo "<br>";
echo $y;
?>
<br>
<h1>PHP Integer</h1>
<?php
$x = 5956;
var_dump($x);
?>
<br>
<h1>PHP Float</h1>
<?php
$x = 10.365;
var_dump($x);
?>
<br>
<h1>PHP Boolean</h1>
<?php
$x = true;
$y = false;
var_dump($x , $y);
?>
<br>
<h1>PHP Array</h1>
<?php
$car = array("scooter", "bike", "range rover");
var_dump($car);
?>
<br>
<h1>PHP Object</h1>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
<br>
<h1>String Function</h1>
<h2>PHP Null Value</h2>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
<br>
<h2>str_word_count funtction</h2>
<?php
echo str_word_count("Hello World!");
?>
<br>
<h2>strrev()-Reverse the string</h2>
<?PHP
echo strrev("Hello Wolrd!");
?>
<br>
<h2>strpos()- search for text within a string</h2>
<?php
echo strpos("Hello World!", "World");
?>
<br>
<h2>str_replace()-replace the text within a string</h2>
<?php
echo str_replace("World", "Nima", "Hello World!");
?>
<br>
<h2>To check type of variable is integer</h2>
<?php
$x = 5678;
var_dump(is_int($x));

$x = 4564.4356;
var_dump(is_int($x));
?>
<br>
<h2>To check whether variable is float</h2>
<?php
$x =  45.45667;
var_dump(is_float($x));
$x = 2.5E-6;
var_dump(is_float($x));
?>
<h2>to check whether the numeric value is finite or infinite</h2>
<?php
$x = 1.9e411;
var_dump($x);
?>
<br>
<h2>To check whether the value is not a number</h2>
<?php
$x = acos(8);
var_dump($x);
?>
<br>
<h2>is_numeric() to check the whether value is numeric</h2>
<?php
$x = 5978;
var_dump(is_numeric($x));
$x = "5978";
var_dump(is_numeric($x));
$x = "56.67" + 100;
var_dump(is_numeric($x));
$x = "Hello";
var_dump(is_numeric($x));
?>
<br>
<h2>PHP Casting Strings and Floats to Integers</h2>
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
<br>
<br>
<br>
<h1>PHP Math</h1>
<h2>PHP pi() function</h2>
<?php
echo (pi());
?>
<br>
<h2>PHP min() and max() function</h2>
<?php
echo(min(1,120,60,2,45,-4,-123));
echo "<br>";
echo(max(1,120,60,2,45,-4,-123));
?>
<br>
<br>
<h2>PHP abs() function returns absolute value of positive value</h2>
<?php
echo abs(-22.7);
?>
<br>
<br>
<h2>sqrt()-square root of number</h2>
<?php
echo sqrt(144);
?>
<br>
<br>
<h2>round()-round of the floating number</h2>
<?php
echo round(9.99999999);
echo "<br>";
echo round(0.9);
?>
<br>
<br>
<br>
<?php
echo rand();
?>
<br>
<br>
<h2>To generate random number from 20 to 30</h2>
<?php
echo rand(20,30);
?>
<br>
<br>
<h1>PHP Constant</h1>
<h2>To create a constant with a case-sensitive name</h2>
<?php
define("GREETING", "welcome all!");
echo GREETING;
?>
<br>
<br>
<h2>To create a constant with a case-insensitive name</h2>
<?php
define("GREETING", "Welcome all", true);
echo greeting;
?>
<br>
<br>
<h2>PHP Constant Array</h2>
<?php
define("cars",[
    "maruti",
    "van",
    "scooter"
]);
echo cars[0];
?>
<br>
<br>
<br>
<h1>PHP Conditional Statement</h1>
<h2>if statement</h2>
 <?php $x = 50; 
 if($x < "51")
 {
     echo "Hello Bhutan"; 
     } ?>

<br>
<br>
<br>
<h2>if....else statement</h2>
<?php
$x = 50;
if($x<"51"){
  echo "welcome to class";
}
else{
  echo "you are not welcome";
}
?>
<br>
<br>
<br>
<h2>if....elseif...else statement</h2>
<?php
$a = 10;
$b = 15;
if($a>$b)
{
echo " a is greater";
}
elseif($a<$b){
echo "b is greater";

}
else{
echo "a and b is same";
}
?>
<br>
<br>
<br>
<h1>PHP switch statement</h1>
<?php
$favcolor="green";
switch($favcolor){
case "red":
echo "your fav color is red!";
break;
case "blue":
echo "your fav color is blue!";
break;
case "green":
  echo "your fav color  is green!";
  break;
  default:
  echo "your fav color is neither red, blue, nor green!";
}
  ?>
  <br>
  <br>
  <h1>PHP Loops</h1>
  <h2>While Loop</h2>
  <?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>
<br>
<br>
<h2>do...while loop</h2>

<?php 
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
<br>
<br>
<h2>PHP for loop</h2>
<?php
for($x=0; $x<=10; $x++)
{
  echo "$x <br>";
}
?>
<br>
<br>
<h2>PHP foreach Loop</h2>
<?php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value){
  echo "$value <br>";
}
?>
<br>
<br>
<h2>foreach when the both key and value is given</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
<br>
<br>
<br>
<h1>PHP Break and Continue Statement</h1>
<h2>PHP Break</h2>
<?php
for($x=0; $x<10; $x++){
  if($x == 4){
    break;
  }
  echo "$x <br>";
}
?>
<br>
<br>
<h2>PHP continue statement</h2>
<?php
for($x=0; $x<10;$x++){
  if($x==4){
    continue;
  }
  echo "$x <br>";
}
?>
<br>
<br>
<br>
<h1>PHP Arrays</h1>
<h1>array example</h1>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<br>
<h2>Indexed Array</h2>
<?php
$cars = array("bike", "maruti", "van");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<br>
<h2>Associative Array</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
<br>
<br>
<h2>Two Dimensional Array</h2>
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
<br>
<h2>sort() ascending order(alphabetical order)</h2>

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<br>
<h2>rsort() descending order</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<br>
<br>
<h2>Sort Array (Ascending Order), According to Value - asort()</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<br>
<br>
<h2>ksort()-ascending according to key</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<br>
<br>
<h2>arsort()-descending order-according to value</h2>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<br>
<br>
<br>
<h2>krsort() descending order-according to key</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>