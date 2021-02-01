<?php
    closeSession();

    function closeSession(){
        session_start();
        session_destroy();
        header("Location: http://localhost/2pill/index.php");
        die();
    }