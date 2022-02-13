<?php
include_once('config.php');
$_Mail = $_POST['mail'];
$_Password = $_POST['password'];
$_Code = $_POST['code'];
$_Query = "SELECT Mail FROM " . Tables::Users->name . " WHERE Mail = '$_Mail' ";
$_Sql = mysqli_query($_Conn, $_Query);
if($_Sql->{'num_rows'} === 0){
    $_Query = "INSERT INTO " . Tables::Users->name . "(Mail, Password, Code) VALUES ('$_Mail', '$_Password', '$_Code')";
    $_Sql = mysqli_query($_Conn, $_Query);
    header('Location: ../../index.php?SignUp=Success');
} else {
    header('Location: ../../signup.php?SignUp=Fail');
}