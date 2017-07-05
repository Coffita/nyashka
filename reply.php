<?php
include 'header.php';
require_once __DIR__ . '/models/Feedback.php';
?>

<?php $feedback = Feedback::find_by_id($_GET['id']); ?>
<div class="relpy-wrapper">
    <article class="reply">
        <p>To: <?=$feedback->usermail?></p>
        <p>Username: <?=$feedback->username?></p>
        <!-- <p>Subject of topic: <?=$feedback->topic?></p> -->
        <form action="reply_form.php?id=<?=$feedback->id?>" method="post">
            <textarea name="message_reply" rows="10" cols="50"></textarea>
        </form>
    </article>
</div>
<?php include 'footer.php'; ?>
