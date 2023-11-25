<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="POST">
        <table>
        <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" name="name"></td>
            </tr>
        <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" name="toEmail"></td>
            </tr>
            <tr>
                <td><label for="">Subject</label></td>
                <td><input type="text" name="sub"></td>
            </tr>

            <tr>
                <td><label for="">body</label></td>
                <td><input type="text" name="body"></td>
            </tr>
            <tr><td>
                <input type="submit" name="submit">
            </td></tr>
        </table>
        
        
    </form> -->
</body>
</html>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// if(isset($_POST['submit'])){

//     $toAdress = $_POST['toEmail'];
//     $subject = $_POST['sub'];
//     $body = $_POST['body'];
//     $Name = $_POST['name'];
    // echo $toAdress.'<br>';
    // echo $subject.'<br>';
    // echo $body;
    // zrogycdxvlfpwxmp
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'traveluniverse.info1@gmail.com';                     //SMTP username
    $mail->Password   = 'tmhg cidm hmij wyil';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('traveluniverse.info1@gmail.com', 'Travel Universe');
    $mail->addAddress($toAdress, $Name);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body.'</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// }
?>


