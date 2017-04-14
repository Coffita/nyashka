<?php
require_once __DIR__ . '/models/Post.php';

// if (!$auth->is_auth()) {
//     header('Location: index.php');
//     exit();
// }

$title = $_POST['title'];
$text = $_POST['text'];
// $user_id = $auth->get_user_id();

if ($title && $text) {
    $post = new Post($title, $text);

    $result = $post->create();

    if ($result === true) {
        header('Location: index.php?post_created=true');
        exit();
    } else {
        header('Location: new_post.php?error=error');
    }   
}
?>