<?php
    header('Content-Type: application/json');
    require '../../php/dbConnect.php';
    function getUsingTable($table, $link){
        $query = "SELECT usingTable FROM sections WHERE name = '$table'";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        $usingTable = (mysqli_fetch_assoc($res));
        $comma = implode(",", (array)$usingTable);
        return $comma;
    }
    if (isset($_POST['page']))
    {
        $page = $_POST['page'];
      
    }
    if (isset($_GET['page'])){
        $lang = "en";
        $file = $_GET['page'];
        $page = getUsingTable($file, $link);
        $sql = "SELECT * FROM $page";
        $result = mysqli_query($link, $sql) or die(mysql_error());
        while($row = (mysqli_fetch_assoc($result)))
        {
            $list[] = $row;
            $allList['items'] = $list;
        }
       // print_r($list);
        echo json_encode($allList, JSON_PRETTY_PRINT);
    }
    if(isset($_GET['item']))
    {
        $item = $_GET['item'];
        if($item == 'combo'){
            $file = $_GET['file'];
            $page = getUsingTable(substr($file, 0, -4), $link);
            function getItemsList($page, $link){
                $i = 0;
                $sql = "SELECT * FROM $page";
                $result = mysqli_query($link,$sql) or die(mysql_error());
                while($row = mysqli_fetch_array($result)){
                    $list[] = $row;
                }
                echo json_encode($list, JSON_PRETTY_PRINT);
            }
            getItemsList($page, $link);
        }
        else{
            function getRidOfColumns($table, $link){
                $sql = "SHOW COLUMNS FROM $table";
                $result = mysqli_query($link,$sql) or die(mysql_error());
                $list = array();
                while($row = mysqli_fetch_array($result)){
                    $list[] = array('Type' => $row['Type'], 'Field' => $row['Field']);
                }
                echo json_encode($list, JSON_PRETTY_PRINT);
            }
            $page = getUsingTable(substr($item, 0, -4), $link);
            getRidOfColumns($page, $link);
         }
    }
?>