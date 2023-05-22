<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="login.css">
    

</head>
<body>
    



<div class="wrapper">
    <h2>sign in</h2>
    <div id="error_message">
        
    </div>

    <form method="post" action="login.php">

        <div class="input_field">
        <input type="text" placeholder="Email" name="email" id="email">
    </div>
    
    <div class="input_field">        
        <input type="password" placeholder="password" id="password" name="password">
    </div>
    
    
        <input type="submit" class="btn"></input>
        <a href="index/index.html" target="_blank" class="home"><button class="btn ">Home</button></a>


    </form>

</div>
<?php
   
      
   if(isset ($_POST['email'] , $_POST['password'])) 
   {
       $email = htmlentities($_POST['email'],ENT_QUOTES, 'UTF-8');
       $password = $_POST['password'];

       echo "User Email :{$email} User password : {$password}";
   }

    ?>


</body>
</html>
