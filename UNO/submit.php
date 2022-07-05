<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="submit.css">
    <link rel="stylesheet" href="bootStrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootStrap/js/bootstrap.js">


</style>
</head>
<body id="body">
    <h1>add a confession</h1>
    <?php
    require_once('db.php');
/*     session_start();
    echo $_SESSION['mail'] . $_SESSION['id'];  */
    session_start();
    $selectAll="select * from categorie";
    $resSelect=$pdo->query($selectAll);
    if($resSelect->rowCount()>0){
    ?>
  <div class="container">

  <form action="subData.php" method="POST" id="form">
    <!-- <input type="hidden" name="iduser" id=""  value="<?php echo  $_SESSION['id']; ?>"> -->
      <label for="">category</label>
      <select name="selected" id="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option disabled selected>please select a category</option>
        <?php while($row=$resSelect->fetch()) { ?>
        
        <option value="<?php echo $row['id']?>"> <?php echo $row['name'] ?></option>
        <?php }}?>
    </select>
  
    <label for="">add your confession</label>
    <textarea name="text" id="" cols="30" rows="10" placeholder="add your confession" class="form-control"></textarea>
    <input type="submit" name="" id="sub">
    </form>
  </div>
</body>
</html>
