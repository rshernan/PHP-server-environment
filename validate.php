<?php
    validate();

    function validate(){
        session_start();
        $user = $_POST["user"];
        $password = $_POST["password"];
        if($password == "password"){
            $_SESSION["login"]="true";
            header("Location: http://localhost/2pill/panel.php");
            die();
        }else{
            $_SESSION["login"]="false";
            print_r($_SESSION);
            header("Location: http://localhost/2pill/index.php");
            die();
        }
    }