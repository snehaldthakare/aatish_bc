<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

  
</head>

<body>
<?php

ob_start();

if(isset($_POST['submit']))
{
require("class.phpmailer.php");

$mail = new PHPMailer();

//Your SMTP servers details

$mail->IsSMTP();               // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server or localhost
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "manoj@aviatorsinfotech.com";  // SMTP username
$mail->Password = "hashamtaiyyab7@1234"; // SMTP password

//It should be same as that of the SMTP user

$redirect_url = "http://".$_SERVER['SERVER_NAME']; //Redirect URL after submit the form
$mail->From =  $_POST['email'];// $mail->Username;	//Default From email same as smtp user


$mail->FromName = $_POST['name'];
	

 //Email address where you wish to receive/collect those emails.
//$mail->AddAddress("aviatorsinfotech@gmail.com");*/
$mail->AddAddress("aatifshaikh29@gmail.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Message from Website";
$message = "First Name :".$_POST['name'].
" \r\n <br>Last Name:".$_POST['name'].
" \r\n <br>Email:".$_POST['email'].
" \r\n <br>Subject:".$_POST['name'].
" \r\n <br>Message :".$_POST['message'];


$mail->Body    = $message;

if(!$mail->Send())
{?>
  <script language="javascript" type="text/javascript">
	alert('Message failed.');
	window.location = 'index.html';
  </script>
<?php
}

?>
<script language="javascript" type="text/javascript">
		alert('Message has been sent');
		window.location = 'index.html'	
	</script>

  <?php
}


?>


</body>
</html>