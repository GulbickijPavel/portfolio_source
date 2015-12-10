<?php
    $fileLocation = '../../smarty/templates/main/header.tpl';
    $links = array();
    $search = "<link";
    $search1 = "<meta";
    // Read from file
    $lines = file($fileLocation);
    foreach($lines as $line)
    {
      // Check if the line contains the string we're looking for, and print if it does
      if(strpos($line, $search) !== false)
      {
       // $text = htmlspecialchars($line);
//        $search_expression = $line;
//        $words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $search_expression, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        $array[] = array('item' => $line);
      }
        else if(strpos($line, $search1) !== false)
        {
            $array[] = array('meta' => $line);
        }
    }
    echo json_encode($array, JSON_PRETTY_PRINT);
?>