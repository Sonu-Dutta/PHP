<?php
$fptr=fopen("file.txt", "r");
// echo var_dump($fptr);
if (!$fptr){
    die("Unable to open this file. Please enter a valid filename.");
}

//To print upto 7 characters.
$content = fread($fptr, 7);
echo $content;
echo "<br>";

//To print total characters present in file
echo filesize("file.txt");
echo "<br>";

//To print upto total characters present in file by using 'filesize' function.
$content = fread($fptr, filesize("file.txt"));
echo $content;
echo "<br>";

fclose($fptr);
?>