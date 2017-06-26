<?php
$sendto = "coffita@mail.ru";
$username = trim($_POST['username']);
$message = $_POST['message'];
$usermail = $_POST['usermail'];

if (filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
    mail("coffita@mail.ru", "Message from your blog", "Text: " . $message, "From: " . $usermail);
    header('Location: index.php');
} else {
    header('Location: feedback_action.php?error=true');
}




?>
