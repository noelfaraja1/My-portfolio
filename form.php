<?php

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $myMail = "noelfaraja1@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have received message from" . $username . ".\n\n" . $message;

    mail($myMail, $message2, $header);
    header("Location:contact.html");
}