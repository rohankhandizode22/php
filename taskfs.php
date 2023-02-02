<?php
if(isset($_POST['sub'])){
   $inputemail=$_POST['email'];
   if(file_exists($inputemail.".txt")){
    $f=fopen($inputemail. ".txt", "r");
    $data=fread($f,filesize($inputemail. ".txt"));
   }
   else{
    $inputname=$_POST['name'];
    $inputage=$_POST['age'];
    $inputcity=$_POST['city'];   
    $fo=fopen($inputemail.".txt","w");
    fwrite($fo," Email: $inputemail \n");
    fwrite($fo,"Name: $inputname \n");
    fwrite($fo,"Age: $inputage \n");
    fwrite($fo,"City: $inputcity \n");
    echo "Created";
   }
   
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Task </title>
    </head>
<body>
    <form method="post">
        Email: <input type="email" name="email"/><br><br>
        Name: <input type="text" name="name"/><br><br>
        Age: <input type="number" name="age"/><br><br>
        City: <input type="text" name="city"/><br><br>
        <input type="submit" name="sub" value="Submit"/><br><br>
        <textarea rows="10" cols="40"> 
            <?=@$data;?>
        </textarea>
    </form>
</body>
</html>