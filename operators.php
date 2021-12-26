<?php
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$a = 4;
$b = 2;

// 1. Arithmetic Operators
echo"Arithmetic Operators";
echo "<br>";
echo "<br>";
echo "For $a + $b, the result is ". ($a + $b) . "<br>";
echo "For $a - $b, the result is ". ($a - $b) . "<br>";
echo "For $a * $b, the result is ". ($a * $b) . "<br>";
echo "For $a / $b, the result is ". ($a / $b) . "<br>";
echo "For $a % $b, the result is ". ($a % $b) . "<br>";
echo "For $a ** $b, the result is ". ($a**$b) . "<br>";
echo "<br>";
echo "<br>";
 
// 2. Assignment Operators
echo"Assignment Operators";
echo "<br>";
echo "<br>";
$x = $a;
echo "For x, the value is ". $x . "<br>";

$a += 6;
echo "For a, the value is ". $a . "<br>";

$a -= 6;
echo "For a, the value is ". $a . "<br>";

$a *= 6;
echo "For a, the value is ". $a . "<br>";

$a /= 5;
echo "For a, the value is ". $a . "<br>";

$a %= 5; // $a = $a % 5
echo "For a, the value is ". $a . "<br>";
echo "<br>";
echo "<br>";
// 3. Comparison Operators 
echo"Comparison Operators";
echo "<br>";
echo "<br>";
$x = 5;
$y = 7;

echo "For $x > $y, the result is ";
echo var_dump($x > $y);
echo "<br>";

echo "For $x >= $y, the result is ";
echo var_dump($x >= $y);
echo "<br>";

echo "For $x < $y, the result is ";
echo var_dump($x < $y);
echo "<br>";

echo "For $x <= $y, the result is ";
echo var_dump($x <= $y);
echo "<br>";

echo "For $x <> $y, the result is "; 
echo var_dump($x <> $y);
echo "<br>";
echo "<br>";
echo "<br>";

// 4. Logical Operators
echo"Logical Operators";
echo "<br>";
echo "<br>";
$m = true;
$n = true;

echo "For $m and $n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For $m && $n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For $m or $n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For $m || $n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !$m , the result is "; 
echo var_dump(!$m);
echo "<br>";

?>