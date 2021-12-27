<?php
echo "Database Connection <br>";
/* Ways to connect to a MySQL Database
1). MySQLi extension   (i-improved)
2). PDO (PHP Data Objects)
*/

// Connecting to the Database
$servername ="localhost";
$username ="root";
$password ="";
// $password ="abc";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);


// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

?>