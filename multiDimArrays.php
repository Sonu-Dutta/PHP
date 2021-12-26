<?php
echo "PHP multi-dimensional arrays <br> <br>";

// 2-dimensional array
$multiDim=array(array(4,6,8,3),
                array(8,9,5,4),
                array(2,7,0,1));
// echo var_dump($multiDim);
//echo $multiDim[2][1];  //accessing one element

for ($i=0; $i < count($multiDim); $i++){
    echo var_dump($multiDim[$i]);
    echo "<br>";
}
echo "<br> <br>";

for ($i=0; $i < count($multiDim); $i++){
    for ($j=0; $j < count($multiDim[$i]); $j++){
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>