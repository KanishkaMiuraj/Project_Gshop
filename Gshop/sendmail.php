<?php

@include 'config.php';
@include 'register.php';


if(isset($_POST['submit'])){

    
    $email = $_POST['email'];
   
    $name = $_POST['name'];
    
    
    
    
    $verification_URL = 'http://localhost/email-verification/verify.php?code=' . $verification_code;
    
    
    
    
    
    $to                    = $email;                                            //reciever
    $sender                = 'gshop1779@gmail.com';                             //Sender Address
    $mail_subject          = 'Verify Email Address';                            //subject
    $email_body            = '<p>Dear' . $name . '</p>';                   //body
    $email_body            = '<p>Thank You for sign in up.click below link to
    verify your email adress in order to activate your account. </p>'.'<p>' . $verification_URL . '</p>'.'<p><br>Thank you <br> Gshop.lk</p>';
    //$email_body            = '<p>' . $verification_URL . '</p>';
    //$email_body            = '<p>Thank you <br> Gshop.lk</p>';
    
    $header = "From: {$sender}\r\nContent-type: text/html;";
    
    $send_mail_result = mail($to, $mail_subject, $email_body, $header);
    
    if($send_mail_result){
    
    echo 'please check your Email.';
        
    }else{
    
    echo 'Error. Mail was not sent';
    
    
    }
    
}


?>