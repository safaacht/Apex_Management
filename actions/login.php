<?php
session_start(); 

$passwordAdmin = "admin";
$passwordJournaliste = "journaliste";
$emailAdmin = "admin@gmail.com";
$emailJournaliste = "journaliste@gmail.com";

if(isset($_POST['login'])){
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(!empty($email) && !empty($password)){
        if($email == $emailAdmin && $password == $passwordAdmin){
            $_SESSION['role'] = 'admin';
            $_SESSION['email'] = $email;
            header('location:../views/dashboard.php?welcome=admin'); exit;
        } elseif($email == $emailJournaliste && $password == $passwordJournaliste){
            $_SESSION['role'] = 'journaliste';
            $_SESSION['email'] = $email;
            header('location:../views/dashboard.php?welcome=journaliste'); exit;
        } else {
            header('location:../views/home.php?error=wrong_credentials'); exit;
        }
    } else {
        header('location:../views/home.php?error=empty_fields'); exit;
    }
}
