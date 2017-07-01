<?php
require_once __DIR__ . '/models/Feedback.php';

$feedback = Feedback::find_by_id($_GET['id']);

$result = $feedback->delete();

if ($result === true) {
    header('Location: feedbacks.php?message_deleted=true');
    exit();
} else {
    header('Location: delete_feedback?message_deleted=error');
}

?>
