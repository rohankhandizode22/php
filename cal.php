<?php
error_reporting(0);
if (isset($_POST['opr'])) {
    $op=$_POST['opr'];
    $no1 = $_POST['t1'];
    $no2 = $_POST['t2'];
    
    if($op=="+"){
        $res = $no1 + $no2;
    }
    elseif($op=="-"){
        $res = $no1 - $no2;
    }
    elseif($op=="*"){
        $res = $no1 * $no2;
    }
    else{
        $res = $no1 / $no2;
    }
   
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
        No1 : <input type="text" name="t1" value="<?= $no1; ?>" /> <br />
        No2 : <input type="text" name="t2" value="<?= $no2; ?>" /> <br />
        Select: <select name="opr">
            <option value="+"> Addition</option>
            <option value="-"> Subtraction</option>
            <option value="*"> Multiplication</option>
            <option value="/"> Division</option>
        </select>
        </select>
        Result : <input type="text" value="<?= $res; ?>" /> <br />
        <input type="submit" name="submit" value="Result" />
    </form>

</body>

</html>