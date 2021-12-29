<?php
// A PHP program to move all zeroes at the end of array

function ZerosToEnd(&$arr, $n)
{

	$count = 0;
	for ($i = 0; $i < $n; $i++)
		if ($arr[$i] != 0)
			$arr[$count++] = $arr[$i];
	while ($count < $n)
		$arr[$count++] = 0;
}

$arr = array(13, 29, 38, 42, 0, 0, 32, 75, 0, 63, 0, 39);
$n = sizeof($arr);
ZerosToEnd($arr, $n);
echo "Array after pushing all zeros to end :\n";

for ($i = 0; $i < $n; $i++)
echo $arr[$i] . " ";

?>