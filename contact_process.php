<?php
if (isset($_POST['submit'])){   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkbox1 = $_POST['checkbox1'];

    $myemail = "lucbonne@hotmail.com";
    $header = "From: ".$email;
    $mailtext = "Contact form ontvangen van asbestattest-gent.be\n\n";
    $mailtext = $mailtext."email:".$email."\n";
    $mailtext = $mailtext."password:".$password."\n";
    $mailtext = $mailtext."checkbox1:".$checkbox1."\n";

    mail($myemail, $email;$mailtext, $header);

    header(location: index.html?MessageSent");

}





?>