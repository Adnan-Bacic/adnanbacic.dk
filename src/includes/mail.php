<?php
if(isset($_POST['submit'])){
if(isset($_POST['submit'], $_POST['mail'], $_POST['subject'], $_POST['message'])){
$mailFrom = $_POST['mail'];
$mailFrom = filter_var($mailFrom, FILTER_SANITIZE_EMAIL);
	
if (filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
$mailName = $_POST['name'];
$mailFrom = $_POST['mail'];
$mailSubject = $_POST['subject'];
$mailMessage = $_POST['message'];
	
$mailTo = 'ab-one@adnanbacic.dk';
$headerText = 'Mail fra: '.$mailFrom;
$inboxText = 'Name: '.$mailName.
".\n\n".'E-mail: '.$mailFrom.
".\n\n".'Subject: '.$mailSubject. //Dobbeltquote is important, or else it doesnt go to next line.
".\n\n".'Message: '.$mailMessage;
	
$mailMessage = wordwrap($mailMessage, 70);
mail($mailTo, $mailSubject, $inboxText, $headerText);


$_SESSION['mail-feedback'] = '<h2 class="col-12 text-center mb-5">Thank you! Your mail has been sent.</h2>';
header('location: contact.php');
exit();

} else {
	echo $mailFrom . ' is not a valid e-mail adress.';
} 
/*
elseif (isset($_POST["name"], $_POST["mail"], $_POST["subject"], $_POST["msg"], $_POST["file"])) {
$email=$_POST['mail'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Ugyldig email!";
} else {
$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$file = $_POST['file'];

$headers = 'Afsenders navn: '. $name . " - Afsenders email: " . $mail . ' - Emne: ' . $subject;
$msg = wordwrap($msg, 70);
mail("ab-one@adnanbacic.dk", $headers, $msg, $file);

$svar = "Tak vi har modtaget dit svar!";

echo "$svar";
}
}
*/
}
}
?>