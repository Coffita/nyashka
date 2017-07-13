<?php include 'header.php'; ?>

<div class="new_post-wrapper-2">
    <div class="new_post-wrapper-1">
        <div class="new_post-wrapper">
            <form class="new_post" action="create_post.php" method="post">
                <input class="new_post_field new_post_title_field" type="text" name="title" placeholder="Enter your title"></br>
                <textarea class="new_post_field new_post_text_field" rows="10" cols="50" wrap="soft | hard" name="text" placeholder="Enter your text"></textarea></br>
                <button class="button new_post_field" type="submit">Add</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
