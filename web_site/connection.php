<?php

session_start();

$localhost = 'localhost';
$user = 'root';
$password = '';
$banco = 'login';
global $pdo;
//ESTRUTURAL
try{
    $pdo = new PDO("mysql:dbname=".$banco."; host=". $localhost, $user, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
        echo 'Error: ' .$e->getMessage();
        exit; 
}




?>