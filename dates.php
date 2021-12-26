<?php
echo "PHP dates <br> <br>";
$d = date("dS, D y "); //01 -->d
$time = date(" h:i:s A"); //A --> AM |PM
$week = date("l"); 
$Day = date("j"); //1 -->j //S-- rd | st |th |nd
$month = date("F");
echo "Today is $d <br>";
echo "WeekDay : $week <br>";
echo "Day : $Day <br>";
echo "Month : $month <br>";
echo "Time : $time <br>";
echo"<br> <br>";

$todaysDate=date('d/m/Y',time()); 
$currentMonth = date('m',time()); 
$currentYear = date('Y',time()); 
$currentDay = date('d',time());
$currentTime = date("g:i A");

echo "Today's date is $todaysDate <br> ";
echo "Month Number : $currentMonth <br> ";
echo "Year : $currentYear <br> ";
echo "Day Number : $currentDay <br> ";
echo "Time : $currentTime <br>";

$year=date("Y");
echo "<br> Copyright $year | All rights reserved <br>";
?>