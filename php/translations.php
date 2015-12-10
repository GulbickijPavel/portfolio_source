<?php 
    session_start();
    function smarty_function_translation($params, &$smarty)
    {
        require 'dbConnect.php';
        $sql = "SELECT translationid, en, lt, ru FROM translations";
        $result = mysqli_query($link, $sql) or die(mysql_error());
        while($row = (mysqli_fetch_assoc($result)))
        {
            $translations[] = $row;
        }
        if(isset($_SESSION['lang']))
        {
            $lang = $_SESSION['lang'];
        }
        else{
            $lang = "lt";
        }
        if(isset($params['langEn'])){
            $en = $params['langEn'];
            foreach ($translations as $b) {
                if ($b['en'] == $en) {
                    $output = $b[$lang];
                    return $output;
                }
            } 
        }
        if(isset($params['langId'])){
            $id = $params['langId'];
            foreach ($translations as $b) {
                if ($b['translationid'] == $id) {
                    $output = $b[$lang];
                    return $output;
                }
            } 
        }

    }
?>