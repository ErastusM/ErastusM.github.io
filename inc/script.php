<?php
if (!isset($_POST['contactUs'])) {
    header("location: index.php");
}

$fullname = strip_tags(trim($_POST['fullname'])) ;
$mobile = strip_tags(trim($_POST['mobile'])) ;
$email = strip_tags(trim($_POST['email'])) ;
$query = strip_tags($_POST['query']) ;

if ($fullname != "" && $mobile != "" && $email !="" && $query !="") {
    if (strlen($fullname) >= 6 && strlen($mobile) >= 10 && !empty($email) && strlen($query) > 10) {
        $subject = "Online Query from your AYABI INVESTMENTS website";
        $mail_msg = "<br>Fullname: ".$fullname."<br>Mobile: ".$mobile."<br>Email: ".$email."<br>Query: $query";
        $mail = mail("kevsnafsi@gmail.com",$subject,$mail_msg);
        if ($mail) {
            $msg = "<b>Thank You for your feedback.</b>";
        } else {
            $msg = "Error sending message, please try again.";
        }
    }
} else {
    $msg = "Please fill out the form correctly.";
}

