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
$dotenv->safeLoad();

if(empty($_ENV['GMAIL_USERNAME']) || empty($_ENV['GMAIL_PASSWORD'])){
    error_log('contact.php: GMAIL_USERNAME / GMAIL_PASSWORD missing in .env');
    echo 'Message could not be sent.';
    exit;
}

$mail = new PHPMailer();

//var_dump($_POST);

$post_data = array("name"=>"",
    "email"=>"",
    "subject"=>"",
    "message"=>"");

// Validate post data:

foreach(array_keys($post_data) as $key){
    if(isset($_POST[$key]) && is_string($_POST[$key])){
        $post_data[$key] = filterInput($_POST[$key]);
    }
}

if(!filter_var($post_data['email'], FILTER_VALIDATE_EMAIL)){
    echo 'Please enter a valid email address.';
    exit;
}

// USING SMTP:
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $_ENV['GMAIL_USERNAME'];
$mail->Password = $_ENV['GMAIL_PASSWORD'];
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->SMTPDebug = 0; // never output the SMTP conversation (contains credentials) to the browser


// Send from our own account (Gmail rejects/spoofs other senders), replies go to the visitor:
$mail->setFrom($_ENV['GMAIL_USERNAME'], 'MultiCooler-Website');
$mail->addAddress($_ENV['GMAIL_USERNAME'], 'MultiCooler-Website');
$mail->addReplyTo($post_data['email'], $post_data['name']);

$mail->isHTML(true);
$mail->Subject = $post_data['subject'];
$mail->Body = $post_data['message'];
$mail->AltBody = html_entity_decode($post_data['message']);

if(!$mail->send()){
    error_log('Mailer Error: ' . $mail->ErrorInfo);
    echo 'Message could not be sent.';
}else {
    $_SESSION['notifications']['form-succes'] = true;

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
