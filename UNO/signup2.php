<?php
if (!empty($_POST['email'] && !empty($_POST['pass']))) {
    require_once("db.php");
    $myArr=[
      
        "email" => $_POST['email'],
        "pass" => $_POST['pass']
    ];
    $selectInfo="SELECT * FROM signin where email=:email and pass=:pass ";
    $statement = $pdo->prepare($selectInfo);
    $statement->execute($myArr);
    if ($statement->rowCount()>0) {
       /*  session_start();
        $_SESSION['id']=$_POST['id'];
        $_SESSION['mail']=$_POST['email'];
        $_SESSION['pass']=$_POST['pass']; */
        while($row=$statement->fetch()) {
            session_start();
            $_SESSION['id']=$row['id'];
            $_SESSION['mail']=$row['email'];
            $_SESSION['pass']=$row['pass']; 

        }

        header("Location: main.php");


    }else{
        header("Location: signup.php");

    }
}else{
    // header("Location: signup.php");
    echo "eeee";
}
?>