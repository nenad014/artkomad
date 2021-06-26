<?php

if(isset($_POST['sendMsgBtn'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "artkomad@yahoo.com";
    $headers = "From: " . $email;
    $txt = "Imate e-mail od " . $name . "\n\n" . $message;

    mail($mailTo, $title, $txt, $headers);
    header('Location: index.php?poruka_poslata');
}