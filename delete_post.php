<?php
require_once __DIR__ . '/models/Post.php';

$post = Post::find_by_id($_GET['id']);

$result = $post->delete();

if ($result === true) {
    header('Location: index.php?post_deleted=true');
    exit();
} else {
    header('Location: delete_post.php?error=error');
}

?>
