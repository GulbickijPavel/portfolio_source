<?php
    $html = '../../smarty/templates/main/header.tpl';
//    $dom = new DOMDocument;
//    $dom->loadHTML($html);
//    $xpath = new DOMXPath($dom);
//    $nodes = $xpath->query('@href');
//    foreach($nodes as $href) {
//        echo $href->nodeValue;                       // echo current attribute value
//       // $href->nodeValue = 'new value';              // set new attribute value
//       // $href->parentNode->removeAttribute('href');  // remove attribute
//    }
//    require '../smarty/config.php';
 //   $smarty->display('smarty/templates/index.tpl');
//    function showSmartyContent($pageToShow){
//        require '../php/dbConnect.php';
////        $query = "SELECT usingTable FROM sections WHERE name='$pageToShow'";
////        $res = mysqli_query($link, $query) or die(mysql_error());
////        $table = mysqli_fetch_assoc($res);
////        $comma = implode(",", $table);
////        echo $comma;
//        $query = "SELECT table FROM sections WHERE name= $pageToShow";
//        $res = mysqli_query($link, $query) or die(mysql_error());
//        $table = mysqli_fetch_assoc($res);
//        $sql = "SELECT * FROM $table";
//        $result = mysqli_query($link, $sql) or die(mysql_error());
//        while($row = (mysqli_fetch_assoc($result)))
//        {
//            $pageToShow[] = $row;
//        }
//        $smarty->assign("$pageToShow",$pageToShow);
//    }
//    if(isset($_GET['page'])){
//        $pageToShow = $_GET['page'];
//      //  echo $pageToShow;
//        showSmartyContent($pageToShow);
//    }
echo htmlspecialchars('<!DOCTYPE html>').'<br>'.
    htmlspecialchars('<html lang="en">').'<br>'.
    htmlspecialchars('<head>').'<br>';
 foreach ($_POST as $key => $value){
     if($key == 'description' || $key == 'viewport' || $key == 'author')
     {
        echo htmlspecialchars('<meta name="'.$key.'"content="'.$value.'">')."<br>";
     }
     else if(strpos($key,'link') !== false)
     {
        echo htmlspecialchars($value)."<br>";
     }
 }
echo htmlspecialchars('</head>');
?>