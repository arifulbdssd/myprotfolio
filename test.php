<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h4>Question No one:</h4>
    <?php 
       $value = 56;
    echo "My valu is: $value" ;
    ?>
     <h4>Question No Two:</h4>
    <?php 
       $string = 'Bangladesh';
    echo "Value that you provided looks like in reverse like this:".strrev($string);
    ?>
     <h4>Question No Three:</h4>
     <?php 
       $string2 ='Hello Bangladesh';
       $string3 ='CIT';
        echo str_replace($string2,$string3,"Hello $string3");
        
    echo"<br>".(pi());
    echo"<br>Question no five:";
    $x= 54;
    $y = 38;
    
    echo "This is two value Addition :".$x+$y."<br>";
    echo " Multiplication of two values :#".$x*$y."#<br>";
    echo "Division of two Values :#".$x/$y."<br>";
    echo "Subtraction of two Values :$".$x-$y."<br>";
    echo "<br>Question No 6<br>";
    $val = 43;
    $val2 = 5;
    $div = $val%$val2;
    echo "Reminder is:".$div."<br>";
    
    $male = "Are you Male?";
    $female ="Are you Female?";
    if($male == TRUE){
        echo $male;
    }else{
        echo $female;
    }
    echo "<br><br>";
    
    /*echo "Question no 9<br>";*/
    
$num = 38;
   if($num/2==0){
       echo "This number is Even";
   }else{
       echo "This number is Odd";
   }
     echo "Question no 9<br>";
   /* $whi = 1;
    while($whi<=10);
        echo $whi;
        echo $d++;
    echo "Question no 10<br>";*/
    
    $switch = "u";
    switch($switch){
    case "a";
    echo "Your input is vowel";
    break;
    case "e";
    echo "Your input is vowel";
    break;
    case "i";
    echo "Your input is vowel";
    break;
    case "o";
    echo "Your input is vowel";
    break;
    case "u";
    echo "Your input is vowel";
    break;
    }
    ?>
</body>
</html>