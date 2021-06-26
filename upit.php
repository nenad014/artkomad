<?php

if(isset($_POST['sendBtn'])) {
    $name = $_POST['ime'];
    $title = $_POST['naslov'];
    $email = $_POST['email'];
    $message = $_POST['poruka'];

    $mailTo = "artkomad@yahoo.com";
    $headers = "From: " . $email;
    $txt = "Imate e-mail od " . $name . "\n\n" . $message;

    mail($mailTo, $title, $txt, $headers);
    header('Location: index.php?poruka_poslata');
}