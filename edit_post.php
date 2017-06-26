<?php
include 'header.php';
require_once __DIR__ . '/models/Post.php';
?>

<form action="edit_post1.php?id=<?=$_GET['id']?>" method="post">
    <div class="new_post1">
        <?php
            $post = Post::find_by_id($_GET['id']);
        ?>
        <input class="new_post" type="text" name="title" value="<?=$post->title?>"></br>
        <textarea class="new_post" rows="10" cols="50" name="text"><?=$post->text?></textarea></br>
        <button type="submit">Редактировать</button>
    </div>
</form>

<?php include 'footer.php'; ?>
