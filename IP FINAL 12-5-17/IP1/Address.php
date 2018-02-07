<?php
   include('session.php');

    $username=$login_session;
    $query="Select FirstName,LastName,Email,ContactNo from signup where Username='$username';";
                        $response=mysqli_query($dbc,$query) 
                                    or 
                                    die(mysqli_error($dbc));
    $row=mysqli_fetch_array($response);
    $FirstName=$row['FirstName'];
    $LastName=$row['LastName'];
    $Email=$row['Email'];
    $ContactNo=$row['ContactNo'];

      if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Pin=stripslashes(trim($_POST["Pin"]));
      $Address=stripslashes(trim($_POST["Address"]));
          
      $sql = "Insert into address(Username,Email,Address,pin) values('$username','$Email','$Address',$Pin);";
      $result = mysqli_query($dbc,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
          if($result==1)
          {
              echo "<script> window.open('Thx.php','_self') </script>";
          }
          else
          {
              echo "<script>alert('Book Already Sold');</script>";
          }
      
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
        
        <script type="text/javascript">
            function Change()
            {
                document.cookie="Button=Change";
               
            }
            function Delete()
            {
                document.cookie="Button=Delete";
              
            }
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
            
                         <hr style="width:84.5%; margin:auto;">
                         div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 w3-animate-opacity" style="padding-top:2%; padding-bottom:2%;">
                    <h1 class="Form-Header">Address</h1>
                    <form action="" method="post">
                        <label class="input">
                            <p>Username:<sup>*</sup></p><br>
                            <input type="text" class="hd3" name="Username" value="<?php echo $username; ?>"  required>
                        </label><br><br>
                        
                        <label class="input">
                            <p>Email:<sup>*</sup></p><br>
                            <input type="Email" class="hd3" name="Email" value="<?php echo $Email; ?>"  required>
                        </label><br><br>
                        
                        
                        <label class="input">
                            <p>Pin-Code<sup>*</sup></p><br>
                            <input type="number" class="hd3" name="Pin" placeholder="Pin-Code" style="width:96%" required>
                        </label><br><br>
                        
                        <label class="input">
                            <p>Address:<sup>*</sup></p><br>
                            <input type="text" class="hd3" name="Address" placeholder="Address"  required>
                        </label><br><br><br>
                        
                        <input type="submit" class="hd3" value="Buy"><br><br>    
                        
                    </form>
                </div>
                <div class="col-md-4"></div>
           
                
     

            
        </div><br>
        <br>
    </body>
</html>