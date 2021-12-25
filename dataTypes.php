<?php

/*
PHP DataTypes
1). Strings
2). Integer
3). Float
4). Boolean
5). Object
6). Array
7). NULL

*/
// String - Sequence of characters
$name="Sonu Dutta";
echo "My name is $name ";

// Integer - Non-decimal number
$income=890000;
$debts=-400;
echo " <br> $income";
echo " <br> $debts";

// Float - Decimal point number
$income = 344000.5;
$debts = -40005.5;
echo "<br> $income";
echo "<br> $debts";

// Boolean - Can be either true or false
$a = true;
$is_friend = false;
echo "<br>";
echo $a;
echo "<br>";
echo var_dump($a);
echo "<br>";
echo $is_friend;
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// Object - Instances of classes
// Employee is a class ---> harry can be one object

// Array - Used to store multiple values in a single variable
$friends = array("Rohan", "Tina", "Rahul", "Mita");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4

// NULL
$name = NULL;
echo var_dump($name);

?>