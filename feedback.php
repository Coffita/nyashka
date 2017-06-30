<?php
require_once __DIR__ . '/models/Feedback.php';

$sendto = "coffita@mail.ru";
$username = trim($_POST['username']);
$usermail = $_POST['usermail'];
$message = $_POST['message'];

if (filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
    if ($username && $usermail && $message) {
        $feedback = new Feedback($username, $usermail, $message);
        $feedback->create();
    }

    header('Location: index.php');
} else {
    header('Location: feedback_action.php?error=true');
}




?>
