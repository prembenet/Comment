<?php
include_once('config.php');
$_Mail = $_POST['mail'];
$_Code = $_POST['code'];
$_Query = "SELECT * FROM ". Tables::Users->name . " WHERE Mail = '$_Mail' AND Code = '$_Code' ";
$_Sql = mysqli_query($_Conn, $_Query);
if($_Sql->{'num_rows'} === 1){
    $_User =  mysqli_fetch_assoc($_Sql);
    $_Password = $_User['Password'];
}
header("Location: ../../forgot.php?Password='$_Password'");