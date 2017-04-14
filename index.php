<?php
include 'header.php';
require_once __DIR__ . '/models/Post.php';
?>

<?php
$posts = array_reverse(Post::find_all());
?>

<?php foreach ($posts as $post) : ?>
    <?php if (!$post->is_private || is_auth()) : ?>
        <article class="post">
            <h1 class="post_head"><?= $post->title ?></h1>
            <p class="post_text"><?= $post->text ?></p>
            <?php if (is_auth()) : ?>
                <a id="delete_post" href="delete_post.php?id=<?=$post->id?>">Удалить</a>
                <p>Пост <?= $post->is_private ? 'закрыт' : 'открыт' ?></p>
                <a href="change_visibility_post.php?id=<?=$post->id?>">Изменить видимость</a>
                <a href="edit_post.php?id=<?=$post->id?>">Редактировать</a>
            <?php endif; ?>
        </article>
    <?php endif; ?>
<?php endforeach; ?>

<?php include 'footer.php'; ?>

