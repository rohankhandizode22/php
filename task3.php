<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Task 3</title>
</head>
<body>
    <?php
    $Maths=89;
    $Physics=80;
    $Chemistry=75;
    $Biology=85;
    $English=87;

    echo "Maths=" .$Maths. " </br> Physics=".$Physics. " </br> Chemistry=".$Chemistry. "</br> Biology=".$Biology. "</br> English=".$English;

    $total=$Maths+$Physics+$Chemistry+$Biology+$English;
    Echo " <br>Total : " .$total;

    $percentage=$total/5;
    Echo "<br> Percentage: " .$percentage;

    if ($percentage>=75){
        echo "<br> First Class With distinction";
    }
    else {
        echo " First Class";
    }
    ?>

</body>
</html>