<?php

if (isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['psw']) && !empty($_POST['psw'])){

require 'connection.php'; 
require 'UserClass.php';

    $us = new UserObj();
    $name = addslashes($_POST['uname']);
    $senha = addslashes($_POST['psw']);

    if($us -> login($name, $senha)== true){
            if(isset($_SESSION['user_id'])){
                header( "Location: home.php");

            }else{
                header( "Location: index.php");
            
            }

    }else{

    header( "Location: index.php");
    
    }

}else{

    header( "Location: index.php");
    
}


?>