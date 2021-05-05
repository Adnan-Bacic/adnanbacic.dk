<?php
if(isset($_POST['submit'])){
if(isset($_POST['submit'], $_POST['email'], $_POST['subject'], $_POST['message'])){
	
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
$mailTo = 'ab-one@adnanbacic.dk';
$headers = "From: {$email}";
$inboxText = "Name: {$name} \n E-mail: {$email} \n Subject: {$subject} \n Message: {$message}";

	
$message = wordwrap($message, 70);
mail($mailTo, $subject, $inboxText, $headers);


$_SESSION['mail-feedback'] = '<h2 class="col-12 text-center">Thank you! Your mail has been sent.</h2>';
header('location: contact.php');
exit();


}
}
?>