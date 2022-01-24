<?php
if(isset($_POST['submit'])){
    if(isset($_POST['submit'], $_POST['email'], $_POST['subject'], $_POST['message'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            $valid = 0;
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $valid = 1;
            }
                
            $mailTo = 'ab-one@adnanbacic.dk';
            $headers = "From: {$email}";
            $inboxText = "Name: {$name} \n E-mail: {$email} \n Subject: {$subject} \n Message: {$message}";
                
            $message = wordwrap($message, 70);

            $res = 0;
            if($valid == 1){
                $res = mail($mailTo, $subject, $inboxText, $headers);
            }

            if($res == 0){
                $_SESSION['mail-feedback'] = '<h2 class="col-12 text-center text-danger">Error, you mail could not be sent. Try again</h2>';
            } else {
                $_SESSION['mail-feedback'] = '<h2 class="col-12 text-center text-success">Thank you! Your mail has been sent.</h2>';
            }

            header('location: index.php#contact');
            exit();
        }
    }
}
?>