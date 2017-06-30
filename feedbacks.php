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
                    <h1 class="feedback_head">From: <?= $feedback->username ?></h1>
                    <h1 class="feedback_mail">Mail: <?= $feedback->usermail ?></h1>
                    <p class="feedback_message">Message: <?= $feedback->message ?></p>
                    <p class="date_of_sending">Message sent: <?= date('j F, Y G:i', strtotime(date($feedback->time_of_sending))) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>



<?php include 'footer.php'; ?>
