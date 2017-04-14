<?php
require_once __DIR__ . '/models/Post.php';

$title = $_POST['title'];
$text = $_POST['text'];

$post = Post::find_by_id($_GET['id']);

if ($title && $text) {

    $post->title = $title;
    $post->text = $text;
    $result = $post->save();

}

if ($result === true) {
    header('Location: index.php?post_editedd=true');
    exit();
} else { 
    header('Location: index.php?error=error');
} 

?>