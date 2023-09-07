<?php


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


if(isset($_POST['submit'])){
    
   

    
    $email = $_POST['email']; 
    $name = $_POST['name'];
    $product = $_POST['product'];
    $contact_number = $_POST['phone'];
    $massage = $_POST['massage'];


require 'PHPmailer\Exception.php';
require 'PHPmailer\PHPMailer.php';
require 'PHPmailer\SMTP.php';

$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();                                        
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'noobgaurab66@gmail.com';                 
    $mail->Password   = 'nudkburbyuulqlcm';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    



    $mail->setFrom($email, $name);
    $mail->addAddress('prajapatikavy418@gmail.com', "UMA DYE CHEM");    
    
    
   
    $mail->isHTML(true);                                  
    $mail->Subject = "For purchasing $product" ;
    $mail->Body    = "
    <pre>
    hello my name is $name 
    
    you can contact me on : $contact_number
            
    my email address is :  $email
        
    i want information about $product</pre>";

    $mail->send();
    echo "<script>alert('Your Response Has Been Sent');</script>";
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent ! please try again.');</script>";
}
}



?>
