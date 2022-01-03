<?php
echo "Welcome to the world of cookies <br>";

// Sytax to set a cookie
// setcookie("name", "values", "expire_in sec", "domain")  ----> / -throughout the website
setcookie("category", "Books",time()+86400, "/");
echo "Cookie is set";

?>