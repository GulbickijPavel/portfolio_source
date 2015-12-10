<?php 
    require '../../php/dbConnect.php';
    require '../../smarty/config.php';
  




    if(isset($_POST['sectionType'])){
        if($_POST['sectionType'] == "simple"){
            $pagename = $_POST['sectionName'];
            $sectionname = ucwords($pagename);
            $query = "SELECT * FROM sections where name = '$pagename'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            $count=mysqli_num_rows($result);
            if($count == 0){
                $newFileName = "../../smarty/templates/sections/".$pagename.".tpl";
                $newFileContent = '<section class="jumbotron" id="'$pagename'"> aaaaaaaaa </section>';

                if(file_put_contents($newFileName,$newFileContent)!=false){
                    $sql = "INSERT INTO sections(name, shown, sectionname, lang, usingTable) VALUES('$pagename', 1, '$sectionname', 'en', '$pagename')";
                    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                    if($result){
                        echo "File created (".basename($newFileName).")";
                    }
                        
                }else{
                    echo "Cannot create file (".basename($newFileName).")";
                }
            }
            else{
                echo "Section with such name already exists";
            }
        }
        
    }else{
        $smarty = new Smarty();
        $smarty->display('../smarty/templates/newSection.tpl');
    }
?>