<?php
    include('session.php');
    
    $username=$login_session;
    $query="Select Address from address where Username='$username';";
                        $response=mysqli_query($dbc,$query) 
                                    or 
                                    die(mysqli_error($dbc));
    $row=mysqli_fetch_array($response);
    $Address=$row['Address'];
    
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
             <div class="col-md-2"></div>
             <div class="col-md-8">
                 <header class="hd2 satisfy" style="color:whitesmoke">Thank You for Buying the book from <a href="Welcome.php">BookWorms.com</a>.<br> The Book will be delivered to : <br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$Address"; ?> <br>within 1 day!<br><br>For more Information, <br>Contact us at 98******87.</header>
             </div>
             <div class="col-md-2"></div>
         </div>
                    
     
        
        
        
        </div>
        
    </body>
</html>