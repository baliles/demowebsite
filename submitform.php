<?php
if(isset($_POST['submit'])){
 
	$to = $_POST['email'];
	$subject = "Baobab Travel Inquiry";
	$txt = "Hello world!";
	$headers = "From: alan@baobabtravel.net" . "\r\n" .
	"CC: dbaliles@salesforce.com";
	mail($to,$subject,$txt,$headers);
}
 
?>