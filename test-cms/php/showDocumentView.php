<?php
    function showSmartyContent($pageToShow, $fileLink){
        require '../../php/dbConnect.php';
        require '../../smarty/config.php';
        $file = $pageToShow.'.tpl';
        $lang =  $_SESSION['lang'];
        $smarty->assign('is_admin', false);
        $smarty->assign('lang', $lang);
        $smarty->assign('showMenu', true);
        function smarty_function_translation($params, &$smarty)
        {
            
            require '../../php/dbConnect.php';
            $sql = "SELECT translationid, en, lt, ru FROM translations";
            $result = mysqli_query($link, $sql) or die(mysqli_error($link));
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
        $sectionname = substr($pageToShow, 0 , -4);
        $query = "SELECT usingTable FROM sections WHERE name = '$sectionname'";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        if($res){
            $usingTable = (mysqli_fetch_assoc($res));
            $comma = implode(",", $usingTable);
            if($comma != "none"){
                $sql = "SELECT * FROM $comma";
                $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                if($result){
                    while($row = (mysqli_fetch_assoc($result)))
                    {
                        $page[] = $row;
                    }
                    $smarty->assign("$sectionname", $page);
                    $smarty->display("$fileLink");
                }
                else{
                    echo "1";
                    $smarty->display("$fileLink");
                }   
            }
            else {
                echo "$fileLink 2";
                $smarty->display("$fileLink");
            }
        }
        else{
            echo "3";
            $smarty->display("$fileLink");
        }
    }
    function smarty_function_skills($params, &$smarty)
    {
        $cat = $params['cat'];
        require '../../php/dbConnect.php';
        $sql = "SELECT * FROM skills WHERE lang = 'en' AND category = '$cat'";
        $result = mysqli_query($link, $sql) or die(mysql_error());
        while($row = (mysqli_fetch_assoc($result))){
            $skills[] = $row;
        }
        $maxCount = count($skills);
        $nCount = ceil($maxCount/4);
        $index = 1;
        $count = 4;
        for($n=1; $n<=$nCount; $n++){
                echo '<ul class="skills-list">';
                if($count > $maxCount ){
                    $count = $maxCount;
                }
                for($i=$index; $i<=$count; $i++){
                    $in = $i-1;
                    if($count < $maxCount){
                        echo '<li><img id="skill',$skills[$in]['skillid'],'" class="skill-image" src="',$skills[$in]['skillimage'],'" alt=""> </li>';
                        if($i%4 == 0 ){
                            echo '</ul>';
                            for($i=$index; $i<=$count; $i++){
                                echo '<article id="skill',$skills[$i-1]['skillid'],'-desc" class="skill-description">
                                <h4>',$skills[$i-1]['skillname'],'</h4>
                                ',$skills[$i-1]['skilldescription'],'
                                </article>';
                            }
                        }
                    }
                    else if ($count == $maxCount){
                        for($i=$index; $i<=$count; $i++){
                            echo '<li><img id="skill',$skills[$i-1]['skillid'],'" class="skill-image" src="',$skills[$i-1]['skillimage'],'" alt=""> </li>';
                        }
                        echo '</ul>';
                        for($i=$index; $i<=$count; $i++){
                            echo '<article id="skill',$skills[$i-1]['skillid'],'-desc" class="skill-description">
                            <h4>',$skills[$i-1]['skillname'],'</h4>
                            ',$skills[$i-1]['skilldescription'],'
                            </article>';
                        }
                    }
                }
                $index = $index+4;
                $count = $count+4;
        } 
    }
    if(isset($_POST['page'])){
        session_start();
        $_SESSION['lang'] = $_POST['langToShow'];
        $pageToShow = $_POST['page'];
        $link = $_POST['link'];
        showSmartyContent($pageToShow, $link);
    }
?>