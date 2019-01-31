<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 31-Jan-19
 * Time: 8:35 PM
 */
//
//$to = 'filiploskovski@hotmail.com';
//$subject = 'Klient na loshkovski.com';
//$name = $_POST['name'];
//$email = $_POST['email'];
//$message = $_POST['message'];
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
//$headers .= "From:". $email . "\r\n" .
//    "Reply-To:". $to . "\r\n" .
//    "X-Mailer: PHP/" . phpversion();

////mail($to,$subject,$message, $headers);
//echo "The email message was sent.";



if((isset($_POST['name']))&&(isset($_POST['email'])!="")){
    $to = 'filiploskovski@hotmail.com';
    $subject = 'Klient od www.loshkovski.com';
    $message = '
        <html>
            <head>
                <title>Call me back</title>
            </head>
            <body>
                <p><b>Name:</b> '.$_POST['name'].'</p> 
                <p><b>Name:</b> '.$_POST['message'].'</p>                     
            </body>
        </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Site <info@mail.com>\r\n";
    mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}