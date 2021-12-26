<?php
echo " Functions in PHP";
echo "<br>";
function Result($marks){
    $sum=0;
    foreach ($marks as $value){
        $sum+=$value;
    }
    return $sum;
}

function Percentage($marks){
    $sum=0;
    $i=1;
    foreach ($marks as $value){
        $sum+=$value;
        $i++;
    }
    return ($sum/600)*100;
}

$sonu=[99,96,98,98,99,97];
$sumMarks=Result($sonu);
$per=round(Percentage($sonu),2); //$round_upto_2_decimals = round($value, 2);

$raj=[60,76,88,75,89,77];
$sumMarksRaj=Result($raj);
$perRaj=round(Percentage($raj),2);

echo "Total marks scored by Sonu is $sumMarks/600 and got $per% <br>";
echo "Total marks scored by Raj is $sumMarksRaj/600 and got $perRaj%<br>";

$tina=[89,96,98,95,80,97];
$sumMarks=Result($tina);
$per=round(Percentage($tina),2);
echo "Total marks scored by Tina is $sumMarks/600 and got $per%<br>";
?>