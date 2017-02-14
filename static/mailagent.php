<?php
if(isset($_POST["submit"])){
	echo "Fill All Fields..";
//Checking for blank Fields..



 $subject =isset($_POST["submit"])? 'New Request: ' . $_POST['subject'] : "New Request!!";
echo $subject;
 $message =isset($_POST["message"])? $_POST['message']: "No message";

 $email_from =$_POST['email'];
 $headers = 'From:'. $email_from ;

 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message = wordwrap($message, 70);
echo $email_from ;
echo $message ;
 // Send mail by PHP Mail Function
 mail("info@nmfmedia.com", $subject, $message, $headers);
 //
 echo '<script language="javascript">alert("Your request has been sent successfully!! Thank you for your interest with us!")</script>';
 sleep(2);
 header('Location: index.html');

 //exit();
	// They clicked Yes



 }


?>
