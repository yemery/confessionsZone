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
    <header>
        <div class="container">
            
        <!-- <a href=""> <img src="images/bb (2).png" alt=""  > confessZone </a> -->
        <a href="">   confessionsZone </a>
                <!-- <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul> -->
            
            <!-- <button class="btn "><span>sign up <i style="margin-left:2px;" class="bi-arrow-right"></i></span></button> -->
            <a href="signup.php"><button type="submit" class="btn"><i>log in </i><i style="margin-left:2px;" class="bi-arrow-right"></i></button>
            </a>

        </div>
        <div class="form">
            <div class="container">
                <p style="color:white; font-family: 'New Rocker', cursive;">create an account <i class="bi-person-plus-fill"></i>
                </p>
                <form action="signin.php" method="POST" >
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Username</label>
                        <input type="text" name="username"   class="form-control" id="exampleInputPassword1">
                      </div>
                    <div class="mb-4">
                        <input type="hidden" class="form-control" name="id" aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                      </div> 
  
                      
                      
                      

                      
                      
                      
                      <button type="submit" class="btn mt-2"><i class="bi-arrow-right-square"></i></button>

                </form>
                
            </div>
        </div>

    </header>
    
</body>
</html>