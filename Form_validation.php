<?php
error_reporting(0);
if (isset($_POST['sub'])) {
    //Error messages
    $nameEmptyErr = "";
    $emailEmptyErr = "";

    //read fields values
    $inputName = $_POST['name'];
    $inputEmail = $_POST['email'];
    $inputPass = $_POST['password'];
    $inputGender = $_POST['m1'];

    // Name Validation 
    if (empty($inputName)) {
        $nameEmptyErr = '<div class="error"> Name cannot be left blank </div>';
    } else if (!(preg_match("/^[a-zA-Z ]+$/", $inputName))) {
        $nameEmptyErr = '<div class="error"> Only Latter and white spaces allow </div>';
    } else {
        echo $inputName . "<br/>";
    }


    // Email Validation 
    if (empty($inputEmail)) {
        $emailEmptyErr = '<div class="error"> Email cannot be left blank </div>';
    } else if (!(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", $inputEmail))) {
        $emailEmptyErr = '<div class="error"> Enter correct email</div>';
    } else {
        echo $inputEmail . "<br/>";
    }

    //Password Validation
    if (empty($inputPass)) {
        $passEmptyErr = '<div class="error"> Password cannot be left blank </div>';
    } else if (!(preg_match("/^[a-zA-Z0-9!@#$%^&*]{6,16}$/", $inputPass))) {
        $passEmptyErr = '<div class="error"> Enter correct password</div>';
    } else {
        echo $inputPass . "<br/>";
    }

    //Gender Validation
    if (empty($inputGender)) {
        $genderEmptyErr = '<div class="error"> Gender cannot be left blank </div>';
    } else if (!(preg_match("/^[a-zA-Z0-9!@#$%^&*]{6,16}$/", $inputGender))) {
        $genderEmptyErr = '<div class="error"> Enter correct gender</div>';
    } else {
        echo $inputGender . "<br/>";
    }

   
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Form Validation</title>
    <style>
        .error {
            color: red;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>

<body>
    
    <h2> Form Validation</h2>
    <form method="post">
        Name : <input type="text" name="name" /> <?= $nameEmptyErr; ?> <br/> <br/>
        Email : <input type="text" name="email" /> <?= $emailEmptyErr; ?> <br/> <br/>
        Password : <input type="password" name="password" /> <?= $passEmptyErr; ?> <br/> <br/>
        Gender : <input type="radio" name="m1" value="Male">  Male
        <input type="radio" name="m1" value="Female">Female <?= $genderEmptyErr; ?> <br /><br />

       <!--  Hobbies: <input type="checkbox" name="hobbies" value="Cricket">Cricket
        <input type="checkbox" name="hobbies" value="Football">Football
        <input type="checkbox" name="hobbies" value="Hockey">Hockey
        <input type="checkbox" name="hobbies" value="Basketball">Basketball
        <br /><br />
        Comment : <input type="textbox" value="<?= $res; ?>" /> <br /><br> -->

        <input type="submit" name="sub" value="Submit" />
    </form>
</body>

</html>
<!-- 
 Form Validation Task
Name (alphabate and white space)
            Email (valid email)
            Password (min 8 , maximum 24)
            Gender  select one 
            Hobbies select one 
            Comment minimum 20 characters 
              Submit 
              All are required -->