<?php
	 //Email information
  $admin_email = "vijay2546@gmail.com";
  $email = "mailat365@gmail.com";
  $subject = "need support tell mobi";
  $comment = "to develop website";
  
  //send email
  mail($admin_email, $subject, $comment, "From:mailat365@gmail.com");
  header('Location: http://localhost/static/index.html');
  //Email response
 // echo "Thank you for contacting us!";
?>
