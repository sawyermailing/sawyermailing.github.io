<html>
<body>
<?php
$to = "clearchaos3@gmail.com";
$subject = "Online Parts Request";
$email = $_REQUEST['message'];
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers);
if($sent)
{print ('<a href="index.html">Thank you. Click here to return to the Homepage.</a>');}
else
{print ("We have encountered an error sending your message";}
	
?>
</body>
</html>
