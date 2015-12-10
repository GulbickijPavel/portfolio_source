<?php 
    header('Content-Type: application/json');
    require '../../php/dbConnect.php';
   
    $sql="SELECT * FROM sections";

    $result = mysqli_query($link, $sql) or die(mysql_error());
    $rows = array();
    while($row = (mysqli_fetch_assoc($result))) {
        $rows[] = $row;
    }
    echo json_encode($rows, JSON_PRETTY_PRINT);
?>