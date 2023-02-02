<?php
        error_reporting(0);
            if(isset($_POST['sub'])){
                $no1=$_POST['t1'];
                $no2=$_POST['t2'];
                $no3=$_POST['t3'];
                $no4=$no1+$no2+$no3;
                $no5=$no4/3;

                if ($no5>=90){
                    
                    $no6="A+";
                }
                elseif( $no5>=80 && $no5<90){
                   $no6="A";
                }
                elseif( $no5>=70 && $no5<80){
                    $no6="B+";
                 }
                 elseif( $no5>=60 && $no5<70){
                    $no6="B";
                 }
                 else{
                    $no6="C";
                 }
                 
                
            }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation 1 </title>
</head>
<body>
    <h2> Marksheet </h2>
    <form method="post">
        English : <input type="text" name="t1" value="<?= $no1;?>"/> <br/> <br/>
        Maths : <input type="text" name="t2" value="<?= $no2;?>"/> <br/> <br/>
        Science : <input type="text" name="t3" value="<?= $no3;?>"/> <br/> <br/>
        Total : <input type="text" name="t4" value="<?= $no4;?>"/> <br/> <br/>
        Percentage : <input type="text" name="t5" value="<?= $no5;?>"/> <br/> <br/>
        Grade : <input type="text" name="t6" value="<?= $no6;?>"/> <br/> <br/>  
        <input type="submit" name="sub" value="Submit"/> <br/>
    </form>
    
</body>
</html>
