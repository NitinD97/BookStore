<?php
    include('session.php');

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
          // username and password sent from form 

          $token = mysqli_real_escape_string($dbc,$_POST['BookID']);

          $sql = "SELECT BookName,Category,Price,Edition,BookImagePath FROM bookinfo WHERE token='$token'";
          $result = mysqli_query($dbc,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          $active = $row;

          $BookName=$row['BookName'];
          $Category=$row['Category'];
          $Edition=$row['Edition'];
          $Price=$row['Price'];
          $Path=$row['BookImagePath'];
          $count = mysqli_num_rows($result);
            if($count==0)
            {
                echo '<script>window.open("BuyOldBook.php","_self"); alert("Wrong Book ID!");</script>';
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
        
        
        
        <?php
            $Category =  $_COOKIE['Category'];
         
            //echo "$Category";
        ?>
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
                            <a href="BuyOldBook.php" class="w3-bar-item w3-button" onclick="CatEng()" >Engineering</a>
                            <a href="BuyOldBook.php" class="w3-bar-item w3-button" onclick="CatNovel()">Novels</a>
                          </div>
                    </div>
                    <button class="w3-button"><a href="SellBooks.php">Sell Books</a></button>
                     <button class="w3-button"><a href="AccSetting.php">Account Settings</a></button>
                    
                             
                        <button class="w3-button php-name" style=" display:inline-block; float:right; ">
                            Hello, <?php echo $login_session; ?> <br><a href="logout.php" class="w3-text-white w3-hover-text-black" style=" font-size:0.75em; padding:1%;">Logout</a>
                        </button>
                    </div>
            </header>
          
               <div class="row">
                 
                       <div class="col-md-1"></div>
                       <div class="col-md-4"><img src="<?php echo "$Path"; ?>" style="width:330px; height:330px;"></div>
                       <div class="col-md-6">
                          <header class="hd1" style="color:whitesmoke;">
                              <?php echo $BookName; ?>
                          </header>
                         
                          
                          <hr>
                          <header class="hd2 satisfy" style="color:whitesmoke">Edition : <?php echo $Edition; ?></header>
                          <header class="hd2 satisfy" style="color:whitesmoke">Category : <?php echo $Category; ?></header>
                          <header class="hd2 satisfy" style="color:whitesmoke">Price : Rs<?php echo $Price; ?></header>
                          <header class="hd2 satisfy" style="color:whitesmoke">Book ID : <?php echo $token; $nt=$token; ?>  </header>
                          <form action="http://localhost:1234/IP1/Delbook.php" method="post" style="max-width:68%;">
                             <label>
                              <input type="hidden" class="hd3" value="<?php echo "$token"; ?>" name="BookID" ><br>
                              </label><br>
                              <input type="submit" class="hd3" value="Buy" style="display:inline-block; min-width:63%;">
                          </form>
                        </div>
                       <div class="col-md-1"></div>
             
               </div>
                
                    
     
        
        
        
        </div>
        
    </body>
</html>