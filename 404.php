<?php
    require('smarty/libs/Smarty.class.php');
    require 'php/dbConnect.php';
    require 'php/translations.php';
    $lang = $_SESSION['lang'];
    $smarty = new Smarty();
    $smarty->assign('lang', $lang);
    $smarty->display('smarty/templates/main/404.tpl');
?>