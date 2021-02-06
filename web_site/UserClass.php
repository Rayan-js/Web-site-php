<?php 

class UserObj {

    public function login($name, $senha){
        global $pdo;

        $sql = "SELECT * FROM user  WHERE user_name = :name AND password = :senha ";
        $sql = $pdo-> prepare($sql);
        $sql->bindValue("name", $name );
        $sql->bindValue("senha", md5($senha));
        $sql->execute();


        if($sql ->rowCount() > 0){
            $data = $sql -> fetch();

            $_SESSION['user_id'] = $data['user_id'];
            return true;
        } else{
            return false;
        }
    }
}









?>