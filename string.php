<?php
$str="string in php";
echo $str;
$len=strlen($str);
echo "<br>";
echo " The length of the string is ";
echo $len;
echo "<br>";
// same as above
echo " The length of the string is ".$len." Thank you " ;
echo "<br>";
echo "Total word is : ".str_word_count($str);
echo "<br>";
echo "The reversed string is : ".strrev($str);
echo "<br>";
echo "The search for position/index of 'in' : ".strpos($str,"in");
echo "<br>";
echo "Replacing 'php' by 'python': ".str_replace("php","python", $str);
echo "<br>";

echo "<br>";

echo "<br>";














?>