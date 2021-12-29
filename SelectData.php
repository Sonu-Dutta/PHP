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

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

//Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in dataBase ";
echo "<br>";

//Display the rows returned by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    //Type the above code 5 times to get the results one-by-one

    // There's a better way to display all the rows
while($row = mysqli_fetch_assoc($result)){
    //echo var_dump($row);
    echo $row['sno']."). Hello! ".$row['name'].", Welcome to ".$row['dest'];
    echo "<br>";
}
}

?>