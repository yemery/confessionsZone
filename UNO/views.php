<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="firstPage.css">
    <link rel="stylesheet" href="bootStrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Charis+SIL&family=New+Rocker&family=Tapestry&display=swap" rel="stylesheet">
</head>
<body>
<?php
// echo $_POST["view"];
echo $_POST['idarticle'];

require_once("db.php");
$sql = "UPDATE article SET views=views+1 WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$_POST['idarticle']]);
// header("Location: main.php");
// header("Location: confession.php");

// $stmt = $pdo->query("select s.id as sid,a.textuser as textuser,a.views as view,a.id as aid,a.dt as dt,s.username as username from signin s join article a on a.iduser=s.id ; where a.id=? ");

$stmt = $pdo->prepare("select s.id as sid,a.textuser as textuser,a.views as view,a.id as aid,a.dt as dt,s.username as username from signin s join article a on a.iduser=s.id  where a.id=? ");
$stmt->execute([$_POST['idarticle']]); 
while ($row = $stmt->fetch()) {
    echo $row['textuser'];
}


?>
</body>
</html>