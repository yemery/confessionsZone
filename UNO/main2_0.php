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



<body>
   

    <h1>all confessions</h1>
    
    

    <div class="container c">
        <a href="submit.php"><button>add a confession</button></a>
        <?php
    require_once('db.php');
    $selectAll="select * from categorie";
    $resSelect=$pdo->query($selectAll);
    if($resSelect->rowCount()>0){
    ?>
    

      
   <div id="con">
   <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" id="cat">
    <select name="selected" id="select" class="custom-select custom-select-lg mb-3" aria-label=".form-select-lg example">
        <option disabled selected>select a category</option>
        <?php while($row=$resSelect->fetch()) { ?>
        
        <option value="<?php echo $row['id']?>"> <?php echo $row['name'] ?></option>
        <?php }}?>

    </select>
    <input type="submit" name="" id="search" value="search">

   </form>
   </div></div>
    
    



    

<?php
require_once("db.php");

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $selected=$_POST['selected'];
    if ($selected==4) { ?>

        <div class="container s">
    <?php
    $stmt = $pdo->query("select s.id as sid,a.textuser as textuser,a.views as view,a.id as aid,a.dt as dt,s.username as username from signin s join article a on a.iduser=s.id ;");
    while ($row = $stmt->fetch()) { ?>
        
            <div class="body">
            <div class="top">
                
                <span><?php echo $row['dt'] 
                ?></span>
                <span id="ico"><?php echo  $row['username']
                ?></span>
            </div>
            <div class="content"><?php echo  substr($row['textuser'],0,605) . "......" ?></div>
            <div class="bottom">
            <!-- <input type="submit" name="" id="rm" value="read more"> -->
            <form action="views.php" method="POST">
            <input type="hidden" name="view" id="" value="<?php echo $row['view'] ?>">
            <input type="hidden" name="idarticle" id="" value="<?php echo $row['aid'] ?>">
            <input type="submit" name="" id="rm" value="read more">

            <!-- <input type="submit" name="" id="" value="go"> -->
                
            </form>

            <i class="bi bi-eye-fill" id="ii">
            <?php echo $row['view'] ;
            
            ?>
           
            
            
        
        
        </i>
           <!--  <script>
                let mybtn=document.getElementById('rm');
                mybtn.addEventListener('click',()=>{alert('rrrrr');})
            </script> -->
        </div>    </div>
 

        
    <?php }?>   </div>
    
<?php }
else { ?>
    <div class="container s">
    <?php
    $selected=$_POST['selected'];
    $stmt = $pdo->prepare("select s.id as sid,a.textuser as textuser,a.views as view,a.id as aid,a.dt as dt,s.username as username from signin s join article a on a.iduser=s.id  where idd=? ");
    $stmt->execute([$selected]); 
    while ($row = $stmt->fetch()) { ?>
        
            <div class="body">
            <div class="top">
                
                <span><?php echo $row['dt'] 
                ?></span>
                <span id="ico">
                <p><?php echo  $row['username']
                ?></p>
            
            </span>
            </div>
            <div class="content scrollbar" > <div  class="force-overflow"><?php echo substr($row['textuser'],0,605) . "......"?></div></div>
            <div class="bottom">
            <!-- <input type="submit" name="" id="rm" value="read more"> -->
            <form action="views.php" method="POST">
            <input type="hidden" name="view" id="" value="<?php echo $row['view'] ?>">
            <input type="hidden" name="idarticle" id="" value="<?php echo $row['aid'] ?>">
            <input type="submit" name="" id="rm" value="read more">

            <!-- <input type="submit" name="" id="" value="go"> -->
                
            </form>

            <i class="bi bi-eye-fill" id="ii">
            <?php echo $row['view'] ;
            
            ?>
           
            
            
        
        
        </i>
           <!--  <script>
                let mybtn=document.getElementById('rm');
                mybtn.addEventListener('click',()=>{alert('rrrrr');})
            </script> -->
        </div>
    </div>
 

        
<?php }}}?>   
</div>







</body>
</html>