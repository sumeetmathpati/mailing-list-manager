<?php


$to = "sumeet.mathpati@gmail.com";
$subject = "It is a testing email";
$message = "It is testing email body";
$headers = "From: sumeet221b@gmail.com\r\n";
$headers .= "Reply-To: sumeet221b@gmail.com\r\n";
if(mail($to,$subject,$message,$headers)) {
    echo "Email has sent successfully.\r\n";
} else {
    echo "Email has not sent. <br />";
}

?>