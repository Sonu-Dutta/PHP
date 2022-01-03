<?php
// PHP program to rearrange the elements in array such that even positioned are greater than odd positioned elements

function assign($a, $n)
{
	sort($a);

	$p = 0; $q = $n - 1;
	for ($i = 0; $i < $n; $i++)
	{
		if (($i + 1) % 2 == 0)
			$ans[$i] = $a[$q--];
		else
			$ans[$i] = $a[$p++];
	}

	for ($i = 0; $i < $n; $i++)
		echo($ans[$i] . " ");
}

$A = array( 1,2,3,4,5,6 );
$n = sizeof($A);
assign($A, $n);

?>
