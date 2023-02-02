<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <h2> Reverse Number </h2>
    <?php
    $a = "12345";
    echo "The number be " .$a ;
    echo "<br>";
    $reverse = '';
    $i = 0;
    $sum=0;
    while(!empty($a[$i])){ 
            $reverse = $a[$i].$reverse; 
            $sum=$sum+$a[$i];
            $i++;
    }
    echo " The reverse number will be " .$reverse.  "<br>";
   
    echo " Sum is " .$sum;
  

    ?>
</body>
</html>