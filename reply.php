<?php
include 'header.php';
require_once __DIR__ . '/models/Feedback.php';
?>

<?php $feedback = Feedback::find_by_id($_GET['id']); ?>
<div class="reply_wrapper-2">
    <div class="reply_wrapper-1">
        <div class="reply_wrapper">
            <article class="reply">
                <p class="reply_field reply_username username_field">Username: <?=$feedback->username?></p>
                <p class="reply_field reply_usermail usermail_field">To: <?=$feedback->usermail?></p>
                <p class="reply_field reply_topic">Subject of topic: <?=$feedback->topic?></p>
                <form action="reply_form.php?id=<?=$_GET['id']?>" method="post">
                    <textarea class="reply_field reply_message message_field" name="message_reply" rows="10" cols="50" placeholder="Add your message here"></textarea><br>
                    <button class="reply_field button" type="submit" name="button">Reply</button>
                </form>
            </article>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
