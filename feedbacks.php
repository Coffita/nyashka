<?php
include 'header.php';
require_once __DIR__ . '/models/Feedback.php';
?>

<?php
$feedbacks = array_reverse(Feedback::find_all());
?>

<?php if (is_auth()) : ?>
    <div class="feedbacks-wrapper">
        <div class="feedbacks">
            <?php foreach ($feedbacks as $feedback) : ?>
                <article class="feedback">
                    <h1 class="feedback_header feedback_head">From: <?= $feedback->username ?></h1>
                    <h1 class="feedback_header feedback_mail">Mail: <?= $feedback->usermail ?></h1>
                    <h1 class="feedback_header feedback_topic">Topic: <?= $feedback->topic ?></h1>
                    <p class="feedback_message">Message: <?= $feedback->message ?></p>
                    <div class="controls_of_feedback">
                        <p class="feedback_added_inf">Message sent: <?= date('j F, Y G:i', strtotime(date($feedback->time_of_sending))) ?></p>
                        <div class="buttons_of_feedback-wrapper">
                            <div class="buttons_of_feedback">
                                <a class="reply_feedback button_of_feedback" href="reply.php?id=<?=$feedback->id?>">Reply</a>
                                <a class="button_of_feedback delete_feedback" href="delete_feedback.php?id=<?=$feedback->id?>">Delete</a>
                            </div>
                            <div class="end_of_feedback_message"></div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>



<?php include 'footer.php'; ?>
