<?php
session_start();
enum Configuration: string{
    case _Database = 'Comment';
    case _Host = 'localhost';
    case _Password = '';
    case _User = 'root';
}
enum Tables{
    case Users;
    case Coment;
}
$_Conn = mysqli_connect(Configuration::_Host->value, Configuration::_User->value, Configuration::_Password->value, Configuration::_Database->value);