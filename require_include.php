<?php

// include '_dbConnection.php'; 
//'include' allows you to proceed further even if there's error in the '_dbconnection.php' file, where as 
//'require' dosen't allow to proceed further ,it gives error .But in 'include' it only gives warning after that next code is executed successfully.
require '_dbConnection.php';


$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

//Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in dataBase ";
echo "<br>";

while($row = mysqli_fetch_assoc($result)){
    //echo var_dump($row);
    echo $row['sno']."). Hello! ".$row['name'].", Welcome to ".$row['dest'];
    echo "<br>";
}

?>