<?php
require_once __DIR__ . '/models/Feedback.php';

$sendto = "coffita@mail.ru";
$username = trim($_POST['username']);
$message = $_POST['message'];
$usermail = $_POST['usermail'];

if (filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
    $feedback = new Feedback($username, $usermail, $message);

    $result = $feedback->create();

    header('Location: index.php');
} else {
    header('Location: feedback_action.php?error=true');
}




?>
