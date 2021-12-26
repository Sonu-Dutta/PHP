<?php
echo "PHP Associative-arrays";
echo "<br> <br>";

// numeric/index arrays:
// $arr=array('Sonu','Vaishakhi','Tina');
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];
// echo "<br>";

//associative arrays:
$favFood=array('Sonu' => 'Chicken-Biryani','Anjana' => 'Paneer-Tikka','Sandhya' => 'Fish-Curry');
//you can also insert a integer value in the above array 

// echo $favFood['Sonu'];
// echo "<br>";
// echo $favFood['Anjana'];
// echo "<br>";
// echo $favFood['Sandhya'];
// echo "<br>";
foreach ($favFood as $key => $value){
    echo "<br> Favorite food of $key is $value.";
 }
?>