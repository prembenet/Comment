<?php
include_once('config.php');
$_Mail = $_POST['mail'];
$_Password = $_POST['password'];
$_Query = "SELECT Mail, Password FROM " . Tables::Users->name ." WHERE Mail = '$_Mail' AND Password = '$_Password' ";
$_Sql = mysqli_query($_Conn, $_Query);
$_Rows = mysqli_num_rows($_Sql);
if($_Rows > 0){
    $_User = mysqli_fetch_assoc($_Sql);
    $_SESSION['Mail'] = $_User['Mail'];
    $_SESSION['Password'] = $_User['Password'];
    header('Location: ../../comment.php?SignIn=Success');
} else {
    header('Location: ../../index.php?SignIn=Fail');
}