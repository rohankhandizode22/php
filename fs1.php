<?php
if(file_exists("rohan.txt")){
    $fo=fopen("rohan.txt", "r");
    $data=fread($fo, filesize("rohan.txt"));
    echo $data;

}
else
{
    $fo=fopen("rohan.txt", "w");
    $data=fwrite($fo,  "Hello Guys");
    echo $data;


}