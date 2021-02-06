<?php

include_once('connection.php');


$name2 = filter_input(INPUT_POST, 'uname2', FILTER_SANITIZE_STRING);
$email2 = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password2 = filter_input(INPUT_POST, 'psw2');


$result_user= " INSERT INTO user(user_name, email , password)
                VALUES ( '$name2', '$email2', md5('$password2'))";

$pdo->exec($result_user);

if($result_user== true){
    header( "Location: home.php");
}


?>