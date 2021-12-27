<?php
echo "Local and Global scope in PHP <br><br>";
$a=12; //Global Variable - Scope is outside the function everywhere.
$b=15;
function printValue(){
    //$a=5; //local Variable - Scope is inside or within the function.
    global $a, $b; //If you want to access a global variable ,then mention 'global $Variable_name';
    echo "<br>1). The value of a is $a and b is $b<br>";
    $a=26; //if you change the values of the global variable in local space ,even the global variable gets updated permanently
    $b=45;
    echo "<br>2). The value of a is $a and b is $b<br>";
}
// $a=9;
// echo $a;
printValue();
echo "<br>3). The value of a is $a and b is $b<br>";
echo "<br>";
//echo var_dump($GLOBALS); //
echo var_dump($GLOBALS["a"]);
echo "<br>";
echo var_dump($GLOBALS["b"]);
echo "<br>";
?>