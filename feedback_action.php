<?php include 'header.php'; ?>

<div class="feedback_wrapper">
    <?php if (isset($_GET['error'])) : ?>
        <p class="wrong_email">Wrong e-mail adress!</p>
    <?php endif; ?>

    <form class="feedback" action="feedback.php" method="post">
         <input required class="feedback_field" type="text" name="username" placeholder="Enter your name"><br>
         <input required class="feedback_field" type="text" name="usermail" placeholder="Enter your e-mail"><br>
         <textarea required class="feedback_field" name="message" rows="10" cols="50" placeholder="Enter your message"></textarea><br>
         <button type="submit">Send</button>
     </form>
</div>

<?php include 'footer.php'; ?>
