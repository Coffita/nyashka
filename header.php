<?php
include 'functions.php';

// if ($_SERVER['REQUEST_URI' == '/'])
//     header('Location: welcome.php');
// else {
//     $page = substr($_SERVER['REQUEST_URI'], 1);

//     if (!preg_match('/^[A-z0-9-_]{3-30}$/', $page)) exit('error');
// }


//     if (file_exists('all/$page.php')) include 'all/$page.php';
//     else if (is_auth() && file_exists('me/$page.php')) include 'me/$page.php';
//     else header('Location: /all/error404.php');

?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">

        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Cormorant+SC" rel="stylesheet"> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet"> -->
        <title> Heart </title>
    </head>

    <body>
        <header>
            <nav class="navigation navigation_for_all-wrapper">
                <nav class="navigation_for_all">
                    <a href="welcome.php"><img class="back" src="img/fox4.png" alt="back"></a>
                    <a class="button_of_nav button_of_nav_for_all" href="index.php">MAIN</a>
                    <a class="button_of_nav button_of_nav_for_all" href="feedback_action.php">FEEDBACK</a>
                </nav>
            </nav>
            <?php if (is_auth()) : ?>
                <nav class="navigation navigation_for_me-wrapper">
                    <nav class="navigation navigation_for_me">
                        <a class="button_of_nav button_of_nav_for_me" href="new_post.php">ADD POST</a><br>
                        <a class="button_of_nav button_of_nav_for_me" href="hidden.php">HIDE</a><br>
                        <a class="button_of_nav button_of_nav_for_me" href="onlyforme_logout.php">LOG OUT</a>
                        <a class="button_of_nav button_of_nav_for_me" href="feedbacks.php">FEEDBACKS</a>
                    </nav>
                </nav>
            <?php endif; ?>

        </header>
