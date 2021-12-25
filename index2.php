<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            max-width: 80%;
            margin:auto;
            background-color:lightblue;
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn about php</h1>
        <p>Your party status is here: </p>
        <?php
        echo "hello ";
        // if-else
        $age = 30;
        if($age>18){
            echo "<br>You can go to the party<br>";
        }
        else if($age==8){
            echo "<br>You are 8 years old<br> ";
        }
        else{
            echo "<br>You cannot go to the party<br>";
        }

        // array
        $lang = array("Python", "C++", "Php", "Java");
        echo $lang[2];

        // total elements in array
        echo count($lang); 

        // loops
        $a=0;
        while($a<=10){
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }

        // iterating arrays in php using while loop
        // $b =0;
        // while($b<count($lang)){
        //     echo "<br>The value of languages is: ";
        //     echo $lang[$b];
        //     $b++;
        // }

        // iterating arrays in php using do-while loop
        $b =0;
        do{
            echo "<br>The value of languages is: ";
            echo $lang[$b];
            $b++;
        }while($b<count($lang));

        // for loop
        // for($c = 0 ; $c < 10; $c++){
        //     echo "<br>The value of c is: ";
        //     echo $c;
        // }

        // for-each loop
        foreach($lang as $value){
            echo "<br>The value of languages from each-loop is: ";
            echo $value; 
        }
        print "<br>";
        function print5(){
            echo "Five <br>";
        }
        print5();
        print5();
        print5();
        print5();

        function printNum($num){
            echo "<br> Your number is ";
            echo $num;
        }
        printNum(9);
        printNum(25);
        printNum(80);
         ?>
    </div>
</body>
</html>