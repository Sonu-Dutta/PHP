<?php
$a = 100;
$b = 10;

if($a > 50){
    echo "$a is greater than 50 <br>";
}
else{
    echo "$a is less than 50 <br>";
}

$age = 24;
//If else ladder : any one of the given condition
if ($age>18){
    echo "You can go to trip <br>";
}
elseif($age>13){
    echo "You cannot go to trip<br>";
}
else{
    echo "Stay at home <br>";
}
//

if ($age>18){
    echo "You can go to party<br>";
}

//
if($age>13){
    echo "You cannot go to party<br>";
}
else{
    echo "Stay safe at home<br>";
}
echo "Done";
?>