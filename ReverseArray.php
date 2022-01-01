<?php
// Iterative PHP program to reverse an array Function to reverse $arr from start to end
function rvArray(&$arr, $start, $end)
{
	while ($start < $end)
	{
		$temp = $arr[$start];
		$arr[$start] = $arr[$end];
		$arr[$end] = $temp;
		$start++;
		$end--;
	}
}	
function printArr(&$arr, $size)
{
	for ($i = 0; $i < $size; $i++)
	{
		echo $arr[$i] . "  ";
	}
echo "\n";
}

$arr = array(1, 2, 3, 4, 5, 6);
echo "<br>Original array is: ";
printArr($arr, 6);
rvArray($arr, 0, 5);
echo "<br>Reversed array is: ";
printArr($arr, 6);

?>
