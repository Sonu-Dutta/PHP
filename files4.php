<?php

//Using (w) and (a) mode if file is not present then it gets created.
echo "Welcome to files in PHP";
// When you open the file in write mode(w) , it will automatically create a file with .txt extension.
$fptr = fopen("files2.txt", "w");
fwrite($fptr, "Hello, Good Afternoon. Take some break and have your lunch.\n");
// If you run this code more than once, suppose 5 times then this content will not be copied 5 times rather it would 
// replace the previous one, so finally content remains only one. i.e. content is overwritten.
fclose($fptr);

$fptr = fopen("files2.txt", "a");
fwrite($fptr, "Hello, Good Afternoon. Take a short nap.\n");
// If you run this code more than once, suppose 5 times then this content will be copied 5 times i.e. content would get appended.
fclose($fptr);
?>