<?php
$to = "";
$subject = "Contact US - Fat Hippo Restaurant.com";
if(isset($_POST['email']) && $_POST['email']!="") {
	$message = "<div>
		<div>Name: ".$_POST['name']."</div>
		<div>Email: ".$_POST['email']."</div>
		<div>subject: ".$_POST['subject']."</div>
		<div>message: ".$_POST['message']."</div>
		<div><br /><br />Some one contact us from fathipporestaurant.com</div>";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: <no-repy@fathipporestaurant.com>' . "\r\n";
	
	mail($to,$subject,$message,$headers);
	header('Location: http://fathipporestaurant.com/contact?msg=success');
} else {
	header('Location: http://fathipporestaurant.com/contact?msg=error');
}
?>