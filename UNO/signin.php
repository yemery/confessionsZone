<?php
require_once("db.php");
$email=$_POST['email'];
$pass=$_POST['pass'];
$username=$_POST['username'];
if (!empty($email) && !empty($pass) && !empty($username)) {
    session_start();
    $_SESSION['mail']=$email;
    $_SESSION['pass']=$pass;
    $_SESSION['username']=$username;
    $insertInto="INSERT INTO signin (email,pass,username) values ('$email','$pass','$username');";
    $pdo->exec($insertInto);
    // echo " added secc";
    // echo $_SESSION['mail'] . $_SESSION['pass'];
    header("Location: main.php");
    // echo $_SESSION['mail'];

    
}else{
    header("Location: firstPage.html");

}

?>