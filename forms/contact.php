<?php
session_start();


  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use Dotenv\Dotenv;

// @info: to access .env files use the $_ENV superglobal.
$dotenv = Dotenv::createImmutable(dirname( __DIR__));
$dotenv->load();

$mail = new PHPMailer();

//var_dump($_POST);

$post_data = array("name"=>"",
    "email"=>"",
    "subject"=>"",
    "message"=>"");

// Validate post data:

$j =0;
$keys = array_keys($post_data);
foreach($_POST as $input){
    $post_data[$keys[$j]] = filterInput($input);
    $j++;
}

// USING SMTP:
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $_ENV['GMAIL_USERNAME'];
$mail->Password = $_ENV['GMAIL_PASSWORD'];
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->SMTPDebug = 2;


$mail->setFrom($post_data['email'], $post_data['name']);
// Email senders email:
$mail->addAddress($_ENV['GMAIL_USERNAME'], 'MultiCooler-Website');     // Add a recipient
//  $mail->addReplyTo('towho@example.com', 'John Doe';

$mail->isHTML(true);
$mail->Subject = $post_data['subject'];
$mail->Body = $post_data['message'];
$mail->AltBody = 'This is the plain text version of the email content';

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else {
    $_SESSION['notifications']['form-succes'] = true;
    echo 'Message has been sent';

    header('Location: ../index.php#contact');
    exit;
}

unset($mail);

// form validation:
function filterInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
