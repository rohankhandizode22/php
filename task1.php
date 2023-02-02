<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 1</title>
</head>
<body>
    <h1> Swaping </h1>
    
    <?php
       echo "<h2> Swaping With third variable </h2>";

       $a= 10;
       $b= 20;
       echo "a=" .$a;
       echo "&nbsp b=" .$b;
       echo "</br>";
       
        $temp=$a;
        $a=$b;
        $b=$temp;
        echo "a=".$a ;
        echo "&nbsp b=" .$b;

       echo "<h2> Swaping Without third variable </h2>";
       $a= 30;
       $b= 40;
       echo "a=" .$a;
       echo "&nbsp b=" .$b;
       echo "</br>";

       $a= $a+ $b;
       $b= $a - $b;
       $a= $a - $b;
       echo "a=".$a ;
       echo "&nbsp b=" .$b;

       echo "<h2> Swaping In One Line </h2>";
       $a= 50;
       $b= 60;
       echo "a=" .$a;   
       echo "&nbsp b=" .$b;
       echo "</br>";

       $a=($a+$b)-($b=$a);
       echo "a=" .$a;
       echo "&nbsp b=" .$b;



    ?>
    
</body>
</html>