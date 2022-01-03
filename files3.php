<?php
$fptr = fopen("file.txt", "r");
// echo fgets($fptr); //prints line one by one
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);

// Reading a file line by line
// while($a = fgets($fptr)){
//    echo $a ;
// }
// echo "<br>End of the file has been reached<br>";

//echo fgetc($fptr); //prints first letter

// Reading a file character by character
// while($a = fgetc($fptr)){
//    echo $a ;

//If there's a number in between the iteration stops it should not contain char. Eg: 2022  whereas 2nd is not considered as number.
// }


//Program which reads the content of a file until (.) dot has been encountered
while($a = fgetc($fptr)){
   echo $a ;
   if($a =="."){
       break;
   }
}

fclose($fptr);

?>