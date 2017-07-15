<?php
require_once __DIR__ . '/models/Post.php';

$post = Post::find_by_id($_GET['id']);

$result = $post->change_visibility();

if ($result === true) {
    header('Location: hidden.php?post_editedd=true');
    exit();
} else {
    header('Location: hidden.php?error=error');
}

?>
