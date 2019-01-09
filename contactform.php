<?php
$status = "";
$email = $_POST['mail'];
$subject = $_POST['subject'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$zprava = $_POST['zprava'];

$mailTo = "dominikroudny@seznam.cz";
$headers = "From: ". $email;
$txt = "You have received an email from: ". $name . " " . $surname . "\n\n" . $zprava;
$mailer = mb_send_mail($mailTo, $subject, $txt, $headers);

if ($mailer) {
    $status = "Email byl úspěšně poslán. / Email has been sent sucessfuly.";
    echo "<script type='text/javascript'>alert('$status');</script>";
} else {

    $status = "Email nebyl úspěšně poslán. / Email has not been sent sucessfuly.";
    echo "<script type='text/javascript'>alert('$status');</script>";
}

header("Location: index.php");
		?>
¨¨
