<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 5</title>
</head>
<body>
    <?php
    $a=40;
    $b=50;
    $c=60;
    echo "<h2> A=" .$a. "<br> B=" .$b. "<br> C=".$c. "</h2>";

    if($a>$b && $a>$c){
        echo "<h2> A is Greatest </h2> ";
    }
    elseif($b>$a && $b>$c){
        echo "<h2> B is Greatest</h2>";
    }
    elseif($c>$a && $c>$b){
        echo "<h2>C is Greatest </h2>";
    }

    ?>

</body>
</html>