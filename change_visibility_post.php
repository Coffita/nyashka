<?php
require_once __DIR__ . '/models/Post.php';

$post = Post::find_by_id($_GET['id']);

$result = $post->change_visibility();

if ($result === true) {
    header('Location: index.php?post_editedd=true');
    exit();
} else {
    header('Location: index.php?error=error');
}

?>
