<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'cruds';

$con = mysqli_connect($server , $username , $password , $db);
if($con){
    echo "Connection is Successfully";
}else{
    echo "Connection is not successfull";
}
?>