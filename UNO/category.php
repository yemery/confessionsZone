<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootStrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<style>
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}
body{
    background-image: url(../UNO/images/bb.jpg);
    background-repeat:repeat-y;
    background-size: cover;
}

h1{
    font-size: 40px;
    height: 279px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: capitalize;
    color: black;
}
.c{
  /*   text-decoration: none;
    color: black;
    display: flex;
    justify-content: end; */
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    align-items: baseline;
}


.c a button{
    width: 204px;
    height: 61px;
    border: 1px solid black;
    border-radius: 54px;
    background-color: transparent;
    text-transform: capitalize;
    cursor: pointer;
}
#select{
    height: 53px;
    background-color: black;
    color: white;
    text-transform: capitalize;
}

#select option{
    text-transform: capitalize;
}
#search{
    border-radius: 3%;
    border: 1px solid;
    height: 53px;
    background-color: black;
    color: white;
}
#con{
    display: flex;
    flex-direction: row;
}
.main{
    height: 300px;
    width: 300px;
    background-color: black;
}
.s{
    display: flex;
    flex-wrap: wrap;
    /* margin-left: 10px; */
    /* justify-content: space-between; */
    margin-top: 57px;
    justify-content: space-between;
    align-items: center;
    color: white;
}
.body{
    height: 300px;
    width: 391px;
    background-color: black;
    /* margin-right: 41px; */
    margin-bottom: 10px;
    border-radius: 5px;
}
.top{
    height: 15%;
}
.buttom{
    height: 5%;
}
.content{
    height: 85%;
    /* text-anchor: middle; */
    font-size: 13px;
    text-align: justify;
    padding: 20px;
}
#cat{
    display: flex;
}
</style>

<body>
   

    <h1>all confessions</h1>
    
    

    <div class="container c">
        <a href="submit.php"><button>add a confession</button></a>
        <?php
    require_once('db.php');
    $selectAll="select * from categorie";
    $resSelect=$pdo->query($selectAll);
    $idd=$_POST['selected'];
    if($resSelect->rowCount()>0){
       
    ?>
  

      
   <div id="con">
   <form action="category.php" method="POST" id="cat">
    <select name="selected" id="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option disabled selected>select a category</option>
        <?php while($row=$resSelect->fetch()) { ?>
        
        <option value="<?php echo $row['id']?>"> <?php echo $row['name'] ?></option>
        <?php }}?>

    </select>
    <input type="submit" name="" id="search" value="search">

   </form>
   </div>
    
    
    </div>
    <div class="container s">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM article where idd=? ");
    $stmt->execute([$idd]); 
    while ($row = $stmt->fetch()) { ?>
        
            <div class="body">
            <div class="top"></div>
            <div class="content"><?php echo $row['textuser'] ?></div>
        <div class="bottom"></div>
    </div>
 

        
    <?php }?>   </div>
    

  
  

  
    
</body>
</html>
