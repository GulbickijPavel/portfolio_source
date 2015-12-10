
<?php
    $fileLocation = '../smarty/templates/header.tpl';
    // Assuming the above tags are at www.example.com
    $meta[] = get_meta_tags($fileLocation);
   // print_r($meta);
    $fileToString = file_get_contents($fileLocation);
    // Notice how the keys are all lowercase now, and
    // how . was replaced by _ in the key.
    echo json_encode($meta);
    //$lines = file($fileLocation);

// Loop through our array, show HTML source as HTML source; and line numbers too.
//    foreach ($lines as $line_num => $line) {
//        echo htmlspecialchars($line) . "<br />\n";
//    }
?>
