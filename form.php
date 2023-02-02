<?php
        error_reporting(0);
            if(isset($_POST['sub'])){
                $no1=$_POST['t1'];
                $no2=$_POST['t2'];
                $sum=$no1+$no2;
            }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Addition</title>
</head>
<body>
    <h2> Addition </h2>
    <form method="post">
        No1 : <input type="text" name="t1" value="<?= $no1;?>"/> <br/>
        No2 : <input type="text" name="t2" value="<?= $no2;?>"/> <br/>
        Result : <input type="text" name="t3" value="<?= $sum;?>"/> <br/>
        <input type="submit" name="sub" value="Add"/>
    </form>
    
</body>
</html>
