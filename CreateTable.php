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
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

// Create a Table in the db
$sql = "CREATE TABLE `sonudb1`.`trip` ( `sno` INT(3) NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(12) NOT NULL ,  `dest` VARCHAR(6) NOT NULL , PRIMARY KEY  (`sno`))";
$result = mysqli_query($conn, $sql);

//Check for the table creation successful or not
echo"<br>";
if($result){
    echo "The table was created successfully";
}
else{
    echo "The table was not created successfully because of the error ---->".mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";
?>