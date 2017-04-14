<?php
session_start();
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navigation">
                <a class="button_of_nav" href="index.php">Главная</a>
                <a href="feedback.php">Написать мне</a>    
            </nav>
            <?php if (is_auth()) : ?>
                <nav class="navigation">
                    <a class="button_of_nav" href="new_post.php">Добавить пост</a>    
                    <a class="button_of_nav" href="onlyforme_logout.php">Выход</a>
                    <a class="button_of_nav" href="hidden.php">Скрытое</a>
                </nav>
            <?php endif; ?>
        </header>