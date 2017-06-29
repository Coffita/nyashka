<?php
include 'header.php';
require_once __DIR__ . '/models/Feedback.php';
?>

<?php
$feedbacks = array_reverse(Feddback::find_all());
?>

<?php if (is_auth()) : ?>
    <div class="feedbacks">
        <?php foreach ($feedbacks as $feedback) : ?>
            <article class="feedback">

            </article>
    </div>





<?php include 'footer.php'; ?>
