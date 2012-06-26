<?php
	$mail = $_POST['mail'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];
	
 //$to = "fullone@tiscali.it";
 $to = "doehell@ymail.com ";
 //$to = "rodney@rodneygarnett.com";
 $message =" You received  a mail from ".$mail;
 $message .=" Text of the message : ".$text;

 if(mail($to, $subject,$message)){
	echo "mail successful send";
} 
else{ 
	echo "there's some errors to send the mail, verify your server options";
}
?>