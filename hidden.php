<?php
include 'header.php';
require_once __DIR__ . '/models/Post.php';
?>

<?php
$posts = array_reverse(Post::find_hidden());
?>

<div class="posts-wrapper">
    <div class="posts">
        <?php foreach ($posts as $post) : ?>
            <?php if (/*!$post->is_private ||*/ is_auth()) : ?>
                <article class="post">
                    <h1 class="post_head"><?= $post->title ?></h1>
                    <p class="post_text"><?= $post->text ?></p>
                    <div class="controls-wrapper">
                        <p class="post_added_inf">Post added: <?= date('j F, Y G:i', strtotime(date($post->date_added))) ?></p>
                        <?php if (is_auth()) : ?>
                            <div class="button_of_post-wrapper">
                                <a class="button_of_post edit_post" href="edit_post.php?id=<?=$post->id?>">Edit</a>
                                <a class="button_of_post change_visibility" href="change_visibility_from_hidden.php?id=<?=$post->id?>">Change visibility</a>
                                <a id="delete_post" class="button_of_post" href="delete_post.php?id=<?=$post->id?>">Delete</a>
                            </div>
                            <p class="post_open ">Post <?= $post->is_private ? 'close' : 'open' ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="end_post1"><img class="end_post" src="img/moon1.png" alt="halfmoon"></div>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
