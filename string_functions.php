<?php
$msg="String functions in php";
$name ="Sonu";
echo $name;
echo "<br>";
echo "The length of my string is " .strlen($name);
// echo "The length of"." my string is " .strlen($name); //concanatenation
echo "<br>";
echo strpos($msg, "in");
echo "<br>";
echo strrev($msg);
echo "<br>";
echo str_replace("php","python",$msg);
echo "<br>";
echo str_repeat($name, 10);
echo "<br>";
echo "<pre>";
echo rtrim("      Hello, Good Morning      ");
echo "<br>";
echo ltrim("      Hello, Good Morning      ");
echo "</pre>";
?>