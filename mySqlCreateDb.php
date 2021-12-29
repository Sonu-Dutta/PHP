<?php
// Connecting to the Database
$servername="localhost";
$username="root";
$password="";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

// Create a db
$sql = "CREATE DATABASE sonudb1";
$result = mysqli_query($conn, $sql);

//Check for the database creation success
echo"<br>";
if($result){
    echo "The db was created successfully";
}
else{
    echo "The db was not created successfully because of the error ---->".mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";


?>