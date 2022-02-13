<?php
include_once('config.php');
$_Query = "SELECT * FROM ". Tables::Coment->name;
$_Sql = mysqli_query($_Conn, $_Query);