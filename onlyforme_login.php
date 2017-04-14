<?php
session_start();

$email = 'coffita@mail.ru';
$psswrd = 'Alphabet13';


$login = $_POST['email'];
$password = $_POST['password'];

if ($login == $email && $psswrd == $password) {
        $_SESSION['is_auth'] = TRUE; 
        header('Location: index.php');
} else {
        header("Location: onlyforme.php");
}
?>