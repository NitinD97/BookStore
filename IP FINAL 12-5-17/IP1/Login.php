<?php
   include("../../mysqli_connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Username = mysqli_real_escape_string($dbc,$_POST['Username']);
      $Password = md5(mysqli_real_escape_string($dbc,$_POST['Password'])); 
      
      $sql = "SELECT Username,Password FROM signup WHERE Username = '$Username' and Password = '$Password'";
      $result = mysqli_query($dbc,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row;
      
      $count = mysqli_num_rows($result);
    
    
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['$Username']=$Username;
         $_SESSION['login_user'] = $Username;
          
          header("location: Welcome.php");
      }else {
         echo '<script> alert("Invalid Username or Password!");</script>';
      }
   }
?>




<DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="CSS/bootmin.css">
        <link rel="stylesheet" type="text/css" href="CSS/W3.css">
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        
        <link rel="icon" href="Images/Logo%20Of%20book.png">
        <title>
            Login
        </title>
    </head>
    <body>
        <div class="container">
            <header class="header">
                <p class="HomePage w3-animate-opacity">
                    
                    <a href="Index.html" class="w3-animate-left"><img src="Images/Logo%20Of%20book.png"><span>BookWorms</span></a> 
                </p>
            </header>
            
            
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 w3-animate-opacity" style="padding-top:2%; padding-bottom:2%;">
                    <h1 class="Form-Header">Login</h1>
                    <div class="row AvatarImg">
                        <img src="Images/img_avatar3.png">
                    </div>
                    <form action="" method="post">
                        <label class="input">
                            <p>Username:<sup>*</sup></p><br>
                            <input type="text" class="hd3" name="Username" placeholder="Username"  required>
                        </label><br><br>
                        
                        <label class="input">
                            <p>Password:<sup>*</sup></p><br>
                            <input type="password" class="hd3" name="Password" placeholder="Password" required>
                        </label><br><br><br>
                        
                        <input type="submit" class="hd3" value="Login"><br><br>
                        <a href="Signup.php" class="hd3">Don't have an Account! Click Here!</a>
                        
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
            
            
        </div>
        
        
    </body>
</html>