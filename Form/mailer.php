<?php
// ----------------------------------------- 
//  The Web Help .com
// ----------------------------------------- 
// remember to replace you@email.com with your own email address lower in this code.

// load the variables form address bar
$subject = $_POST["subject"];
$message = $_POST["message"];
$from = $_POST["from"];
$verif_box = $_POST["verif_box"];

// remove the backslashes that normally appears when entering " or '
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$from = stripslashes($from);
$name = stripslashes($name); 

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	// if verification code was correct send the message and show this page
	mail("pellehelin@gmail.com", 'Online Form: '.$subject, $_SERVER['REMOTE_ADDR']."\n\n".$message, "from: $name", "email: $from");
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
} else if(isset($message) and $message!=""){
	// if verification code was incorrect then return to contact page and show error
	header("Location: http://pellenetdesign.com/a_new_pellenetdesign/index.php?subject=$subject&from=$from&message=".urlencode($message)."&wrong_code=true");
	exit;
} else {
	echo "no variables received, this page cannot be accessed directly";
	exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>E-Mail Sent</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style></head>

<body>
Email sent. Thank you.<br />
<br />
Return to <a href="http://pellenetdesign.com/a_new_pellenetdesign">home page</a> ? 
</body>
</html>