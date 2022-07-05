<?php



 if (!empty($_POST['selected'] && !empty($_POST['text']))) {
  


    require_once("db.php");
    session_start();
    echo $_SESSION['pass'];
    $usermail=$_SESSION['pass'];
    $stmt = $pdo->prepare("SELECT * FROM signin where pass=?");
    $stmt->execute([$usermail]); 
    while ($row = $stmt->fetch()) {
        
       $s=$row['id'];
       
    }



    $select=$_POST['selected'];
    $text=$_POST['text'];
  /*   $insertData='INSERT INTO article (textuser,idd,iduser)  values ("$text",'.$select.');';
    $pdo->exec($insertData);  
 */
    $insertData= "INSERT INTO article (textuser,idd,iduser) VALUES (?,?,?)";
    $stmt= $pdo->prepare($insertData)->execute([$text,$select,$s]);
    
    header("Location: main.php"); 

}

?>