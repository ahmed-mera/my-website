<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])){
    $to   = 'ahmedmera81136@gmail.com';
    $tit  = filter_var( $_POST['titMess'], FILTER_SANITIZE_STRING);
    $from = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $mess = filter_var( $_POST['mess'], FILTER_SANITIZE_STRING);
    $name = filter_var($_POST['fullName'], FILTER_SANITIZE_STRING);

    $bodyEmail = '
    <table  margin-left = "7px" width="100%">
        <tr>
            <td > Full Name : </td>
            <td >'.$name.'</td>
        </tr>
        <tr>
            <td > email : </td>
            <td>' .$from. '</td>
        </tr>
        <tr>
            <td > Subject : </td>
            <td >' .$tit. '</td>
        </tr>
        <tr>
            <td > Message : </td>
            <td >' .$mess. '</td>
        </tr>
    </table>';

    try {
        //Server settings
        // $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '';                     // SMTP username
        $mail->Password   = '';                               // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($from, $name);
        $mail->addAddress("");               // Name is optional

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $tit;
        $mail->Body    = $bodyEmail;

        $mail->send();
        echo 'Message has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
?>
