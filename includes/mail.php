<?php
if(isset($_POST['submit'])){
if(isset($_POST['submit'], $_POST['mail'], $_POST['subject'], $_POST['message'])){
$mailFrom=$_POST['mail'];
$mailFrom = filter_var($mailFrom, FILTER_SANITIZE_EMAIL);
	
if (filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
$mailTo = 'ab-one@adnanbacic.dk';
$headers = 'Mail fra: '.$mailFrom;
$inboxText = 'Mail fra: '.$name.
".\n\n".'E-mail: '.$mailFrom. 
".\n\n".'Emne: '.$subject. //Dobbeltquote is important, or else it doesnt go to next line.
".\n\n".'Besked: '.$message;
	
$message = wordwrap($message, 70);
mail($mailTo, $subject, $inboxText, $headers);

$svar = '<h2 class="col-12 text-center mb-5">Thank you! Your mail has been sent.</h2>';

echo $svar;
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