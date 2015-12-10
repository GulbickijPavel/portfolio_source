<?php
    require '../php/dbConnect.php';
    require '../smarty/config.php';
    session_start();
//    session_destroy();
//    session_write_close();
//    setcookie(session_name(),'',0,'/');
//    session_regenerate_id(true);
    if(isset($_SESSION["username"]) and isset($_SESSION["password"]))
    {
         $smarty->display('smarty/templates/index.tpl');
    }
    else{
        $smarty->display('login.tpl');
    }
?>