<?php
// PHP program to find sum of digits of a number until sum becomes single digit.
function Sum( $n)
{
	$sum = 0;
	while($n > 0 || $sum > 9)
	 {
		if($n == 0)
		{
			$n = $sum;
			$sum = 0;
		}
		$sum += $n % 10;
		$n = (int)$n / 10;
		echo"<br>";
		echo "sum= ".$sum;
		echo"<br>";
		echo "n= ". $n;
		echo"<br>";
	}
	return $sum;
}
$n = 12134;
echo "<br>The Sum upto single-digit is : ".Sum($n);
?>
