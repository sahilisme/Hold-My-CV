<?php

class functions{
    public function redirect($address){
        header("Location:".$address);
    }

    public function setError($msg){
        $_SESSION['error']= $msg;   
    }
    public function setAuth($data){
        $_SESSION['Auth']= $data;   
    }
    public function Auth(){
        if(isset($_SESSION['Auth'])){
            return $_SESSION['Auth'];
        }else{
            return false;
        }
    }

    public function error(){
        if(isset($_SESSION['error'])){
            echo "Swal.fire('','".$_SESSION['error']."','error')";
            unset($_SESSION["error"]);
        }
}
public function setAlert($msg){
    $_SESSION['alert']= $msg;
}
public function alert(){
    if(isset($_SESSION['alert'])){
        echo "Swal.fire('','".$_SESSION['alert']."','success')";
        unset($_SESSION["alert"]);

    }
}

public function AuthPage(){
    if(isset($_SESSION['Auth'])){
        $this->redirect('login.php');
    }
}
public function nonAuthPage(){
    if(isset($_SESSION['Auth'])){
        $this->redirect('myresume.php');
    }
}
}

$fn=new functions();

