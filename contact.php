
<?php
$name = $_POST['name'];
$request = $_POST['request'];

$to = "clearchaos3@gmail.com";
$subject = "Online Supplies Request";
$body = "This is an automated message, please don't reply.\n\n $request"

mail($to,$subject,$body);
	
?>
