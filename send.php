<?php
session_start();

    $email_to = "alan@baobabtravel.net"; // change with your email
    $name     = $_POST['firstname'];  
    $email    = $_POST['email'];
    $subject   = $_POST['Baobab Travel Inquiry'];
    $message    = $_POST['firstname'];
    
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo "success";       
    } 
    else{
        echo "failed";     
    }  
?>
