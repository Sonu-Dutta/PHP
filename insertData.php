<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sonudb1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = "Rohan";
$destination = "Australia";

// Sql query to be executed
$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record (".$name." , ".$destination.") has been inserted successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>