<?php
require_once __DIR__ . '/models/Feedback.php';

$message_reply = $_POST['message_reply'];

$feedback = Feedback::find_by_id($_GET['id']);

if ($message_reply) {
    $feedback->message_reply = $message_reply;

    $result = $feedback->add_reply();

}

if ($result === TRUE) {
    header('Location: feedbacks.php?reply_added=true');
    exit();
} else {
    header('Location: feedbacks.php?reply_added=false');
}
?>
