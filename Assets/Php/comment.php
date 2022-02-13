<?php
include('config.php');
$_Comment = $_POST['comment'];
$_Mail = $_SESSION['Mail'];
$_Query = "INSERT INTO ". Tables::Coment->name ."(Mail,Comment) VALUES ('$_Mail','$_Comment')";
mysqli_query($_Conn, $_Query);
header('Location: ../../comment.php?Comment=Added');