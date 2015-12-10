<?php
session_start();
$lang = $_SESSION['lang'];
function translate($id){
    require 'dbConnect.php';
    $lang = $_SESSION['lang'];
    $sql = "SELECT translationid, $lang FROM translations where translationid in (4, 60, 6, 9, 14, 15, 16, 61, 62)";
    $result = mysqli_query($link, $sql) or die(mysql_error());
    $rows = array();
    while($row = (mysqli_fetch_assoc($result))) {
        $rows[] = $row; 
    }
    foreach ($rows as $b) {
        if ($b['translationid'] == $id) {
            $output = $b[$lang];
            return $output;
        }
    }
}
ini_set("sendmail_from", "gulbickij.pavel@gmail.com");
if(isset($_POST['email'])) {

    $email_to = "gulbickij.pavel@gmail.com";
    $email_subject = "Mail";

    function died($error) {
        echo '<p class="form-submit-mesage failure">', translate(61), '</br>';
        echo translate(62),' ', $error , '</p>';
        die();
    }
    if(!isset($_POST['company']) ||
        !isset($_POST['nameSurname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $company = $_POST['company']; // required
    $nameSurname = $_POST['nameSurname']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $comments = $_POST['comments']; // required
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= translate(4);
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$nameSurname)) {
    $error_message .= ', '.translate(14).' '.translate(15);
  }
 
  if(!preg_match($string_exp,$company)) {
    $error_message .= ', '.translate(9) ;
  }
 
  if(strlen($comments) < 2) {
    $error_message .= ', '.translate(16);
  }
  
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
    
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Sender: ".clean_string($nameSurname)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telephone: ".clean_string($phone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
 
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<?php
    echo '<p class="form-submit-mesage success">', translate(60) ,'</p>';
}
?>