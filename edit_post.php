<?php
include 'header.php';
require_once __DIR__ . '/models/Post.php';
?>

<div class="new_post-wrapper-2">
    <div class="new_post-wrapper-1">
        <div class="new_post-wrapper edit_post-wrapper">
            <form action="edit_post1.php?id=<?=$_GET['id']?>" method="post">
                <div class="new_post edit_post">
                    <?php
                        $post = Post::find_by_id($_GET['id']);
                    ?>
                    <input class="new_post_field new_post_title_field edit_post_title_field" type="text" name="title" value="<?=$post->title?>"></br>
                    <div class="edit_post_text_field-wrapper">
                        <textarea class="new_post_field new_post_text_field edit_post_text_field" rows="10" cols="50" name="text"><?=$post->text?></textarea></br>
                    </div>
                    <button class="button new_post_field edit_post_button_field" type="submit">Редактировать</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
