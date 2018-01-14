<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email2 . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("recievers_mail_marizumakozi97@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you, we will get back to you";
}
}
}
?>
















<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>MARIZU MAKOZI | CONTACT</title>
  <link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="styles.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>


<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'>Home</a></li>
    <li><a href='https://marizucodes.blogspot.co.ke/?m=1'>Blog</a></li>

 <!--<li><a href='about.php'>About</a></li>-->
   <li><a href='contact.php'>Contact</a></li>
</ul>
</div>


<br><br>
<p align="center"><font size="4" color="white">GET IN TOUCH</font></p>

<br><br><br>

<p align="center"><font size="3" color="white">Got a project you would like me to work on? Or how about a friendly chat?  <br>Send me a message.</font></p>

<br>
  	<form action="mailto:marizumakozi97@gmail.com" id="form" method="post" name="form"  class="contact">
    <fieldset class="contact-inner">
      <p class="contact-input">
	    &nbsp;  &nbsp;<font color="white">NAME</font><br>
        <input type="text" name="name" placeholder="Your Name…" required  autofocus>
      </p>

      <p class="contact-input">
	     &nbsp;  &nbsp;<font color="white">EMAIL</font><br>
	 <input type="text" name="email" placeholder="Your Email…" required  autofocus>
      </p>

      <p class="contact-input">
	     &nbsp;  &nbsp;<font color="white">MESSAGE</font><br>
        <textarea name="msg" placeholder="Your Message…"></textarea>
      </p>

      <p class="contact-submit">
        <input type="submit" value="Send Message">
      </p>
    </fieldset>
  </form>

  
 
	
	
  <section class="about">
    <p align="left">
	   &nbsp;  &nbsp;   &nbsp;  &nbsp;    &nbsp;  &nbsp;<font color="white" size="3"> Contact Info</font>
 
    </p>
	
	<p align="center">   <a href="https://www.linkedin.com/in/makozi-marizu-137258112/?trk=public-profile-join-page"> <img src="imgs/linkedin.png" height="45"> </a> &nbsp;   &nbsp;  &nbsp; 

 <a href="https://twitter.com/kozirizu"> <img src="imgs/twitter.png" height="45"></a> </p>    <p align="right"  valign="top"><a href="#" title="Go Top"><img src="imgs/uparrow.png" >
<br>
<br>
    <p class="about-author">
       <font color="white" size="2">&copy; &nbsp; 2017  &nbsp;Marizu Makozi -
    &nbsp; All Rights Reserved  </font><br>
    </p>
	
  </section>
  

  
</body>
</html>
