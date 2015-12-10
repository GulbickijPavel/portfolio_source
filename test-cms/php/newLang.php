<?php
  require_once 'fileUpload.php';
  if(isset($_POST['name']))
  {
      $target_dir = "../../images/";
      $name = $_POST['name'];
      $url = $_POST['url'];
      $keyword = $_POST['keyword'];
      $langNative = $_POST['langNative'];
      $image = $_FILES['image']['name'];
      require '../../php/dbConnect.php';
      $chekQuery = "SELECT name FROM languages WHERE keyword = '$keyword'";
      $chekQueryResult = mysqli_query($link, $chekQuery);
      $count = mysqli_num_rows($chekQueryResult);
      if($count != 1){
          imageupload($_FILES['image'], $target_dir);
          $insertQuery = "INSERT INTO languages(name, url, keyword, langNative, image) VALUES ('$name', '$url', '$keyword', '$langNative', '$image' )";
          $insertResult = mysqli_query($link, $insertQuery) or die(mysqli_error($link));
          if($insertResult){
              $query = "ALTER TABLE translations ADD COLUMN $keyword text";
              $result = mysqli_query($link, $query) or die(mysqli_error($link));
              if ($result) {
                  echo "we got result: <br> name - ".$name."<br> url - ".$url."keyword - ".$keyword." <br>langNative - ".$langNative."<br> image- ".$image;
              }else {
                  echo "Row ".$keyword." exists";
              }
          }
      }
  }
  else {
    echo "nothing set";
  }
?>
