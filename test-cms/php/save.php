<?php
require ('../../php/dbConnect.php'); //
require('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();
//if(isset($_GET['sectionname']))
//{
//    $sectionname = $_GET['sectionname'];
//    if ($sectionname == 'home'){
//       $sectionname = $_POST['sectionname'];
//       $startdescription = $_POST['startdescription'];
//       
//        $sql = "UPDATE sections set sectionname='$sectionname' where sectionid = 1";
//        $q1 = mysqli_query($link, $sql);
//        $query = "UPDATE startpage set startinfo='$startdescription' where startid = 1";
//        $q2 = mysqli_query($link, $query);
//        if (! $q1 || !q2){
//            header("Location: change.php?sectionname=home&success=false");
//        }
//        else{
//            header("Refresh:0; url=../index.php");
//            header("Location: change.php?sectionname=home&success=true");
//        }
//    }
//    else if($sectionname == 'abou'){
//        $name = $_POST['name'];
//        $surname = $_POST['surname']; 
//        if ($_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) { 
//            $userphoto = $_FILES['fileToUpload']['name'];
//            $imagetoupload = $_FILES['fileToUpload'];
//            $img = "images/$userphoto";
//            $target_dir = "../../images/";
//            imageupload($imagetoupload, $target_dir);
//        }
//        else{
//            $img = $_POST['uploadedImage'];
//            if($img != ' ')
//            {
//                $img = $_POST['uploadedImage'];
//            }
//            else {
//                $img = "images/blank.png";
//            }
//        }
//        $birthdate = $_POST['birthdate'];
//        $livingplace = $_POST['livingplace'];
//        $email = $_POST['email'];
//        $phone = $_POST['phone'];
//        $infoEn = $_POST['infoEn'];
//        $infoLt = $_POST['infoLt'];
//        $infoRu = $_POST['infoRu'];
//        $sql = "UPDATE user set name='$name', surname='$surname',  userphoto='$img', birthdate='$birthdate', livingplace='$livingplace', email='$email', phone='$phone', infoEn='$infoEn', infoLt='$infoLt',infoRu='$infoRu'  where userid = 1";
//        $q1 = mysqli_query($link, $sql);
//        if(!q1){
//            header("Location: change.php?sectionname=abou&success=false");
//        }
//        else{
//            header("Refresh:0; url=../index.php");
//            header("Location: change.php?sectionname=abou&success=true");
//        }
//    }
//    else if($sectionname == 'skil'){
//        $skillid = $_POST['skillid'];
//        $skillname = $_POST['skillname'];
//        if ($_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) { 
//            $imagetoupload = $_FILES['fileToUpload'];
//            $imagename = $_FILES['fileToUpload']['name'];
//            $img = "/portfolio.lt/images/skills/$imagename";
//            $target_dir = "../../images/skills/";
//            imageupload($imagetoupload, $target_dir);
//        }
//        else{
//            $img = $_POST['uploadedImage'];
//            if($img == '' || $img == 'images/')
//            {
//                $img = "http://placehold.it/150x150";
//            }
//            else {
//                $img = $_POST['uploadedImage'];
//            }
//        }
//        $skillimage = $img; 
//        $infoEn = $_POST['infoEn'];
//        $infoLt = $_POST['infoLt'];
//        $infoRu = $_POST['infoRu'];
//        $sql = "SELECT * FROM skills WHERE skillid='$skillid' and lang = 'en'";
//        $result = mysqli_query($link, $sql);
//        $count = mysqli_num_rows($result);
//        if ($count > 0) {
//            $enExists = 'true';
//        }
//        else {
//            $enExists = 'false';
//            $sql = "INSERT INTO skills "."
//                    (skillname, skillimage, skilldescription, lang, skillid) "."
//                    VALUES('$skillname', '$skillimage', '', 'en', '$skillid')";
//            $result = mysqli_query($link, $sql);
//        }
//        $sql = "SELECT * FROM skills WHERE skillid='$skillid' and lang = 'lt'";
//        $result = mysqli_query($link, $sql);
//        $count = mysqli_num_rows($result);
//        if ($count > 0) {
//            $ltExists = 'true';
//        }
//        else {
//            $ltExists = 'false';
//            $sql = "INSERT INTO skills "."
//                    (skillname, skillimage, skilldescription, lang, skillid) "."
//                    VALUES('$skillname', '$skillimage', '', 'lt', '$skillid')";
//            $result = mysqli_query($link, $sql);
//        }
//        $sql = "SELECT * FROM skills WHERE skillid='$skillid' and lang = 'ru'";
//        $result = mysqli_query($link, $sql);
//        $count = mysqli_num_rows($result);
//        if ($count > 0) {
//            $ruExists = true;
//        }
//        else {
//            $ruExists = "false";
//            $sql = "INSERT INTO skills "."
//                    (skillname, skillimage, skilldescription, lang, skillid) "."
//                    VALUES('$skillname', '$skillimage', '', 'ru', '$skillid')";
//             $result = mysqli_query($link, $sql);
//        }
//        $sql="UPDATE skills 
//            SET skilldescription = CASE lang 
//                WHEN 'en' THEN '$infoEn' 
//                WHEN 'lt' THEN '$infoLt' 
//                WHEN 'ru' THEN '$infoRu' 
//            END, 
//           skillname = '$skillname', skillimage = '$skillimage'
//        WHERE skillid = $skillid";
//        $q1 = mysqli_query($link, $sql);
//        if(!q1){
//            header("Location: change.php?sectionname=skil&success=false");
//        }
//        else{
//            header("Location: change.php?sectionname=skil&success=true&itemid=$skillid");
//        }
//    }
//    else if($sectionname == 'expr'){
//        $experienceid = $_POST['experienceid'];
//        $company = $_POST['company'];
//        $address = $_POST['address'];
//        $url = $_POST['url'];
//        $periodstart = $_POST['periodstart'];
//        $position = $_POST['position'];
//        $descriptionEn = $_POST['descriptionEn'];
//        $descriptionLt = $_POST['descriptionLt'];
//        $descriptionRu = $_POST['descriptionRu'];
//        $periodend = $_POST['periodend'];
//        $sql = "UPDATE experience set company='$company', address='$address', url='$url', periodstart = CAST( STR_TO_DATE('$periodstart', '%Y,%m,%d') AS DATE), periodend = CAST(STR_TO_DATE('$periodend' ,'%Y,%m,%d') AS DATE), position='$position', descriptionEn='$descriptionEn' , descriptionLt='$descriptionLt', descriptionRu='$descriptionRu'  where experienceid='$experienceid'";
//        $q1 = mysqli_query($link, $sql) or die(mysqli_error($link));
//        if(!$q1){
//            mysqli_error();
//            header("Location: change.php?sectionname=expr&success=false");
//        }
//        else{
//            /*header("Refresh:0; url=../index.php");*/
//            header("Location: change.php?sectionname=expr&success=true&itemid=$experienceid");
//        }
//    }
//    else if($sectionname == 'proj'){
//        $projectid = $_POST['projectid'];
//        $projectname = $_POST['projectname'];
//        $descriptionEn = $_POST['descriptionEn'];
//        $descriptionLt = $_POST['descriptionLt'];
//        $descriptionRu = $_POST['descriptionRu'];
//        
//        if ($_FILES['file1ToUpload']['error'] === UPLOAD_ERR_OK){ 
//            $image1toupload = $_FILES['file1ToUpload'];
//            $imagename1 = $_FILES['file1ToUpload']['name'];
//            $img1 = "/portfolio.lt/images/projects/$imagename1";
//            $target_dir = "../../images/projects/";
//            imageupload($image1toupload, $target_dir);
//        }
//        else{
//            $img1 = $_POST['image1'];
//            if($img1 == '')
//            {
//                $img1 = "http://placehold.it/150x150";
//            }
//            else {
//                $img1 = $_POST['image1'];
//            }
//        }
//        if ($_FILES['file2ToUpload']['error'] === UPLOAD_ERR_OK){ 
//            $image2toupload = $_FILES['file2ToUpload'];
//            $imagename2 = $_FILES['file2ToUpload']['name'];
//            $img2 = "/portfolio.lt/images/projects/$imagename2";
//            $target_dir = "../../images/projects/";
//            imageupload($image2toupload, $target_dir);
//        }
//        else{
//            $img2 = $_POST['image2'];
//            if($img2 == '')
//            {
//                $img2 = "http://placehold.it/150x150";
//            }
//            else {
//                $img2 = $_POST['image2'];
//            }
//        }
//        if ($_FILES['file3ToUpload']['error'] === UPLOAD_ERR_OK){ 
//            $image3toupload = $_FILES['file3ToUpload'];
//            $imagename3 = $_FILES['file3ToUpload']['name'];
//            $img3 = "/portfolio.lt/images/projects/$imagename3";
//            $target_dir = "../../images/projects/";
//            imageupload($image3toupload, $target_dir);
//        }
//        else{
//            $img3 = $_POST['image3'];
//            if($img3 == '')
//            {
//                $img3 = "http://placehold.it/150x150";
//            }
//            else {
//                $img3 = $_POST['image3'];
//            }
//        }
//        $sql = "UPDATE projects SET projectname='$projectname', descriptionEn='$descriptionEn', descriptionLt='$descriptionLt', descriptionRu='$descriptionRu', image1='$img1', image2='$img2', image3='$img3' WHERE projectid = '$projectid'";
//        $q1 = mysqli_query($link, $sql) or die(mysqli_error($link));
//        if(!q1){
//            header("Location: change.php?sectionname=proj&success=false");
//        }
//        else{
//            header("Refresh:0; url=../index.php");
//            header("Location: change.php?sectionname=proj&success=true&itemid=$projectid");
//        }
//    }
//    else if($sectionname == 'skil-add'){
//        $skillname = $_POST['skillname'];
//        if ($_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) { 
//            $imagetoupload = $_FILES['fileToUpload'];
//            $imagename = $_FILES['fileToUpload']['name'];
//            $img = "/portfolio.lt/images/skills/$imagename";
//            $target_dir = "../../images/skills/";
//            imageupload($imagetoupload, $target_dir);
//        }
//        else{
//            $img = "http://placehold.it/150x150";
//        }
//        $query = "SELECT MAX(skillid) AS Id FROM skills";
//        $result= mysqli_query($link, $query);
//        $row = mysqli_fetch_array($result);
//        if(!$row){
//            
//        }
//        else{
//            $skillid = $row["Id"] + 1;
//            echo $skillid;
//        }
//        $skillimage = $img; 
//        $infoEn = $_POST['infoEn'];
//        $infoLt = $_POST['infoLt'];
//        $infoRu = $_POST['infoRu'];
//        $skillKnowledgeEn = $_POST['skillKnowledgeEn'];
//        $skillKnowledgeLt = $_POST['skillKnowledgeLt'];
//        $skillKnowledgeRu = $_POST['skillKnowledgeRu'];
//        $sql = "INSERT INTO skills (skillname, skillimage, skilldescription, lang, skillid, knowledgeEn) VALUES('$skillname','$skillimage','$infoEn', 'en', '$skillid', '$skillKnowledgeEn');";
//        $sql .= "INSERT INTO skills (skillname, skillimage, skilldescription, lang, skillid, knowledgeLt) VALUES('$skillname','$skillimage','$infoLt', 'lt', '$skillid', '$skillKnowledgeLt');";
//        $sql .= "INSERT INTO skills (skillname, skillimage, skilldescription, lang, skillid, knowledgeRu) VALUES('$skillname','$skillimage','$infoRu','ru', '$skillid', '$skillKnowledgeRu')";
//        $result = mysqli_multi_query($link, $sql) or die(mysqli_error($link));
//        if(!$result){
//            header("Location: change.php?sectionname=skil-add&success=false");
//        }
//        else{
//          //  header("Refresh:0; url=../index.php");
//
//            header("Location: change.php?sectionname=skil-add&success=true");
//            
//        }
//    }
//    else if($sectionname == 'experience-add'){
//        $company = $_POST['company'];
//        $address = $_POST['address'];
//        $url = $_POST['url'];
//        $periodstart = $_POST['periodstart'];
//        $position = $_POST['position'];
//        $descriptionEn = $_POST['descriptionEn'];
//        $descriptionLt = $_POST['descriptionLt'];
//        $descriptionRu = $_POST['descriptionRu'];
//        $periodend = $_POST['periodend'];
//        $sql = "INSERT INTO experience(company, address, url, periodstart, periodend, position, descriptionEn, descriptionLt, descriptionRu) VALUES('$company', '$address', '$url', '$periodstart', '$periodend', '$position', '$descriptionEn', '$descriptionLt', '$descriptionRu' )";
//        $q1 = mysqli_query($link, $sql) or die(mysqli_error($link));
//        if(!q1){
//            header("Location: change.php?sectionname=experience-add&success=false");
//        }
//        else{
//            /*header("Refresh:0; url=../index.php");*/
//
//            header("Location: change.php?sectionname=experience-add&success=true");
//            
//        }
//    }
//    else if($sectionname == 'proj-add'){
//        $projectname = $_POST['projectname'];
//        $projectdescription = $_POST['description'];
//        $image1toupload = $_FILES['file1ToUpload'];
//        $imagename1 = $_FILES['file1ToUpload']['name'];
//        $image2toupload = $_FILES['file2ToUpload'];
//        $imagename2 = $_FILES['file2ToUpload']['name'];
//        $image3toupload = $_FILES['file3ToUpload'];
//        $imagename3 = $_FILES['file3ToUpload']['name'];
//       
//        $img1 = "images/projects/$imagename1";
//        $img2 = "images/projects/$imagename2";
//        $img3 = "images/projects/$imagename3";
//        $target_dir = "../../images/projects/";
//        imageupload($image1toupload, $target_dir);
//        imageupload($image2toupload, $target_dir);
//        imageupload($image3toupload, $target_dir);
//        $sql = "INSERT INTO projects(projectname,description,image1, image2, image3) VALUES('$projectname','$projectdescription','$img1','$img2','$img3')";
//        $q1 = mysqli_query($link, $sql) or die(mysqli_error($link));
//        if(!q1){
//            header("Location: change.php?sectionname=project-add&success=false");
//        }
//        else{
//            /*header("Refresh:0; url=../index.php");*/
//            header("Location: change.php?sectionname=project-add&success=true");
//        }
//    }
//}
    if(isset($_POST['sectionname']))
    {
        
        $sectionname = $_POST['sectionname'];
        if($sectionname == 'translations-save'){
            $id = $_POST['trid'];
            $ru = $_POST['langru'];
            $lt = $_POST['langlt'];
            $en = $_POST['langen'];
            $sql = "UPDATE translations SET en='$en', ru='$ru', lt='$lt' WHERE translationid = '$id'";
            $q1 = mysqli_query($link, $sql) or die(mysqli_error($link));
            if(!$q1){
                echo 'err';
              //  header("Location: change.php?sectionname=experience-add&success=false");
            }
            else{

            //    header("Location: ../settings.php");

            }
        }else if(($sectionname == 'translations-new')){
            $ru = $_POST['langru'];
            $lt = $_POST['langlt'];
            $en = $_POST['langen'];
            $sql = "INSERT INTO translations(en, ru, lt) VALUES('$en','$ru','$lt')";
            $q1 = mysqli_query($link, $sql) or die(mysqli_error($link));
            if(!$q1){
                echo 'err';
              //  header("Location: change.php?sectionname=experience-add&success=false");
            }
            else{
                
             //   header("Location: ../settings.php");

            }
        }
        if($sectionname == 'delete'){
            $id = $_POST['itemid'];
            $table = $_POST['table'];
            $key = $_POST['key'];
            $sql = "DELETE FROM $table where $key = $id";
            $result = mysqli_query($link, $sql) or die(mysqli_error($link));
            if(!$result){
               
            }
            else{
            
            }
        }
       // trid: id, sectionname: secName, usingTable: secTable, shown: secShow, order:  secOrder
        else if($sectionname == 'meniu-save'){
            $id = $_POST['secId'];
            $secName = $_POST['section'];
            $secTable = $_POST['usingTable'];
            $secShow = $_POST['shown'];
            $secOrder = $_POST['sectionOrder'];
            $sql = "UPDATE sections SET sectionname='$secName', usingTable='$secTable', shown='$secShow', sectionOrder='$secOrder' WHERE sectionid='$id'";
            $q1 = mysqli_query($link, $sql) or die(mysqli_error($link));
            if(!$q1){
                echo 'err';
            }
            else{
                
            }
        }
    }

    function imageupload($file, $target_dir){
        $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($file["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
//        if (file_exists($target_file)) {
//            echo "Sorry, file already exists.";
//            $uploadOk = 0;
//        }
        // Check file size
        if ($file["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                echo "The file ". basename($file["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

?>