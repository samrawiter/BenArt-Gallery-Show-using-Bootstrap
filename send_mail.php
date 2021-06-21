<?php include('index.php') ?>

<?php 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];

        if(isset($_POST['sendmail'])) {
            require 'PHPMailerAutoload.php';
            require 'credential.php';

            date_default_timezone_set('Etc/UTC');

require './PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "enrique.se43@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "578304mom";
            $mail->setFrom($email, $name);

//Set an alternative reply-to address
$mail->addReplyTo($email, $name);

//Set who the message is to be sent to
$mail->addAddress("enrique.se43@gmail.com","BENARTS");

//Set the subject line
$mail->Subject = $subject;

            // print_r($_FILES['file']); exit;
            for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
                $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
            }
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
            $mail->AltBody = $_POST['subject'];

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
                echo $email;
            }
        }
     ?>