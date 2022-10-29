<?php 

$mail_to_send_to = "tomas.fleiderman@gmail.com";
$from_email = "hello@scriptquality.com";
// $sendflag = $_REQUEST['sendflag'];
// print('print');
// print_r('print_r');
// print_r($_REQUEST);    
$name=$_REQUEST['name'];
$sendflag = "send";
if ( $sendflag == "send" )
        {
                $subject= "Message subject";
                $email = $_REQUEST['email'] ;
                $message= "\r\n" . "Name: $name Email: $email" . "\r\n"; //get recipient name in contact form
                $message = $message.$_REQUEST['message'] . "\r\n" ;//add message from the contact form to existing message(name of the client)
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                $a = mail( $mail_to_send_to, $subject, $message, $headers );
                error_log("sdffds");
                if ($a)
                {
                     print("OK");
                } else {
                     print("There was an error with your e-mail.");
                }
        }
?>