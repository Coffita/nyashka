<?php
require_once __DIR__ . '/models/Post.php';

$title = $_POST['title'];
$text = addslashes(nl2br($_POST['text']));

if ($title && $text) {
    $post = new Post($title, $text);

    $result = $post->create();

    if ($result === true) {
        header('Location: index.php?post_created=true');
        exit();
    } else {
        // die($result);
        header('Location: new_post.php?error=error');
    }
}
?>
