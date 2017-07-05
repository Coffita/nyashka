<?php include 'header.php'; ?>

<div class="feedback_form_wrapper-2">
    <div class="feedback_form_wrapper-1">
        <div class="feedback_form_wrapper">
            <form class="feedback_form" action="feedback.php" method="post">
                <?php if (isset($_GET['error'])) : ?>
                    <p class="wrong_email">Wrong e-mail adress!</p>
                <?php endif; ?>

                <input required class="feedback_form_field username_field"  type="text" name="username" placeholder="Enter your name"><br>
                <input required class="feedback_form_field usermail_field" type="text" name="usermail" placeholder="Enter your e-mail"><br>
                <input required class="feedback_form_field topic_field" type="text" name="topic" placeholder="Enter your subject of topic"><br>
                <textarea required class="feedback_form_field message_field" name="message" rows="10" cols="50" placeholder="Enter your message"></textarea><br>
                <button type="submit" class="feedback_form_field button">Send</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
