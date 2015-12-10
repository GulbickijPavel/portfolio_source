<?php
    $fileLocation = '../smarty/templates/sections/skills.tpl';
    $html = file_get_contents($fileLocation);
    echo htmlspecialchars($html) .'<br>';
//    $links = array();
//    $search = "<";
//    // Read from file
//    $lines = file($fileLocation);
//    $i = 0;
//    foreach($lines as $line)
//    {
//      // Check if the line contains the string we're looking for, and print if it does
//      if(strpos($line, $search) !== false)
//      {
//        $text = htmlspecialchars($line);
//        $search_expression = $text;
//        echo $search_expression .'<br>';
////        $words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $search_expression, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
////        $links[] = array('info' => $words, 'id' => $i);
////        $i++;
//      }
//    }
    //echo json_encode($links);
?>

   