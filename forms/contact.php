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

//var_dump($post_data);


// USING SMTP:
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'cb9bcf3791f19c';
$mail->Password = '1ec1222361790c';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

$mail->setFrom($post_data['email'], $post_data['name']);
// Email senders email:
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
//  $mail->addReplyTo('towho@example.com', 'John Doe';

$mail->isHTML(true);
$mail->Subject = "PHPMailer SMTP test" . $post_data['subject'];
$mail->addEmbeddedImage('https://thefinanser.com/wp-content/uploads/2015/12/6a01053620481c970b01b7c7617a9f970b-600wi.jpg', 'image_cid');
$mail->Body = '<img src="../assets/img/coolbox/logo.jpg">' . $post_data['message'];
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



// form validation:
function filterInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
