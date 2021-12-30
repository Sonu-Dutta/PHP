<?php // Connecting to the Database 
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
$sql = "SELECT * FROM trip WHERE dest='Germany'"; 
$result = mysqli_query($conn, $sql); 
// Usage of WHERE Clause to fetch data from the database 
$num = mysqli_num_rows($result); 
echo $num . " records found in the DataBase<br>"; 
$no=1; 
if($num> 0){ 
    while($row = mysqli_fetch_assoc($result))
    { 
        echo $no . ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>"; 
        $no = $no +1;
     } 
 }
 ?>