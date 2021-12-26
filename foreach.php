<?php
echo "For-each in PHP";
echo "<br>";
$a=array("Apple","Mango","Grapes","Orange","Guava");
// for ($i=0; $i<count($a);$i++){
//     echo $a[$i];
//     echo "<br>";
// }

// Easy way for the above code by for-each loop
foreach($a as $value){
    echo "$value <br>";
}
?>