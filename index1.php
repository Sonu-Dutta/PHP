<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <div class="container">
        This is my first php Website 
        <?php
        echo"hello world";
        // Single line comment
        /* 
        multi-line comment
        */
// echo =Echo
        // operators
        $var1 = 10;
        $var2 = 20;
        echo $var1;
        echo $var2;
        // arithmetic operators
        echo $var1 + $var2;

        // assignment operators
        // increment/decrement operators
        // logical operators

        // new line
        echo"<br>";

        // comparison operators
        echo var_dump(1==4);
        // var_dump : to display data type
        
        // data types :
        // string , integer, float, boolean, array, object
        echo"<br>";
        // defining constant  -----> it can be an array or string
        define('PI',3.14);
        echo PI;
        echo "hello";

        ?>
    </div>
</body>
</html>