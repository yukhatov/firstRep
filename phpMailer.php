<?php
//https://myaccount.google.com/lesssecureapps
//https://accounts.google.com/DisplayUnlockCaptcha
function sendMessage()
{

    $body = "";

    $mail = new PHPMailer();

    $mail->IsSMTP(); 
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host       = "ssl://smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "primetimeglasses@gmail.com";  // GMAIL username
    $mail->Password   = "mC7GA2X1";            // GMAIL password

    $mail->SetFrom('primetimeglasses@gmail.com', 'ProjektCS');

    $mail->Subject    = "Sold yesterday controll";

    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $mail->MsgHTML($body);

    $address = "yukhatov@gmail.com";
    $mail->AddAddress($address, "John Doe");

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }
}
?>
