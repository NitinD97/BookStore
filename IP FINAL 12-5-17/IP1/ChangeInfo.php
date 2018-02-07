<?php
   include('session.php');

    $username=$login_session;
    $query="Select FirstName,LastName,Email,ContactNo,Password from signup where Username='$username';";
                        $response=mysqli_query($dbc,$query) 
                                    or 
                                    die(mysqli_error($dbc));
    $row=mysqli_fetch_array($response);
    $FirstName=$row['FirstName'];
    $LastName=$row['LastName'];
    $Email=$row['Email'];
    $ContactNo=$row['ContactNo'];
    $Oldpass=$row['Password'];
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Email= mysqli_real_escape_string($dbc,$_POST['Email']);
      $ContactNo =mysqli_real_escape_string($dbc,$_POST['ContactNo']); 
      
      $sql = "Update signup set Email='$Email',ContactNo='$ContactNo' where Username='$username';";
      $sql1 = "Update bookinfo set Email='$Email' where Username='$username';";
      $result = mysqli_query($dbc,$sql)
                or
                die(mysqli_error($dbc));
      $result1 = mysqli_query($dbc,$sql1)
                or
                 die(mysqli_error($dbc));
    echo '<script>window.open("AccSetting.php","_self");</script>';
   }   
?>


<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="CSS/bootmin.css">
        <link rel="stylesheet" type="text/css" href="CSS/W3.css">
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        
        <link rel="icon" href="Images/Logo%20Of%20book.png">
        <link href="https://fonts.googleapis.com/css?family=Concert+One|Dancing+Script|Satisfy" rel="stylesheet">
        <title>
            BookWorms!
        </title>
        
        <style>
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
        </style>
        
        <script type="text/javascript">
            function CatEng()
            {
                document.cookie = "Category=Engineering";
            }
            function CatNovel()
            {
                document.cookie = "Category=Novel";
            }
            
        </script>
        
    </head>
    
    <body>
        <div class="container">
            <header class="header">
                <p class="HomePage w3-animate-opacity">
                    
                    <a href="Welcome.php" class="w3-animate-left"><img src="Images/Logo%20Of%20book.png"><span>BookWorms</span></a> 
                </p>
                
                <div class="w3-bar NavBar">
                    <div class="w3-dropdown-hover">
                        <button class="w3-button">Buy Old Books &nbsp;</button>
                        <div class="w3-dropdown-content w3-animate-opacity w3-bar-block w3-border">
                            <span><b>Categories</b></span>
                            <hr style="height:2px; background-color:#c2b7b7; width: 94%; margin:auto;">
                            <a href="BuyOldBook.php" class="w3-bar-item w3-button" onclick="CatEng()">Engineering</a>
                            <a href="BuyOldBook.php" class="w3-bar-item w3-button" onclick="CatNovel()" >Novels</a>
                          </div>
                    </div>
                    <button class="w3-button"><a href="SellBooks.php">Sell Books</a></button>
                    
                             
                        <button class="w3-button php-name" style=" display:inline-block; float:right; ">
                            Hello, <?php  echo $login_session; ?> <br><a href="logout.php" class="w3-text-white w3-hover-text-black" style=" font-size:0.75em; padding:1%;">Logout</a>
                        </button>
                    </div>
            </header>
                       
                        
            <div class="row">
               <div class="col-md-4"></div>

                <div class="col-md-4 form">
                    <h1 class="Form-Header hd1">Change Info</h1>

                      <!--<div class="row AvatarImg">
                            <img src="Images/img_avatar3.png">
                        </div>-->
                   <form action="" method="post">

                        <br>
                        <label>
                            <p class="hd2">Email<sup>*</sup>:</p><br>
                            <input class="hd3" type="email" value="<?php  echo $Email; ?>" onkeyup="http://localhost:1234/IP/LoginCheck.php" name="Email" required><br>
                        </label>

                        <label>
                            <p class="hd2">Contact<sup>*</sup>:</p><br><br><br>
                            <input class="hd3" style="width:96%;float:none" type="tel" value="<?php  echo $ContactNo; ?>" name="ContactNo" maxlength="10" required><br>
                        </label><br>

                        <input class="hd3" type="submit" id="Submit" value="Change"><br><br>

                    </form>
                        <br>



                    <h1 class="Form-Header hd1 ">Change Password</h1>

                    <form action="http://localhost:1234/IP1/ChangeSettingPass.php" method="post">
                        <label >
                            <p class="hd2">Old Password<sup>*</sup>:</p><br>
                            <input class="hd3" id="pass1" type="password" placeholder="Password" name="oldpass" required><br>
                        </label>

                        <label >
                            <p class="hd2">New Password<sup>*</sup>:</p><br>
                            <input class="hd3" id="pass1" type="password" placeholder="Password" name="pass1" required><br>
                        </label>

                        <label>
                            <p  class="hd2">Confirm Password<sup>*</sup>:</p><br>
                            <input class="hd3" id="pass2" onkeyup="checkpass()" type="password" placeholder="Password" name="pass2" required><br>
                        </label><br>
                        <input class="hd3" type="submit" id="Submit" value="Change"><br><br>
                    </form>
               </div>

                <div class="col-md-4"></div>
            </div>
                    
            
        </div><br>
        <br>
    </body>
</html>