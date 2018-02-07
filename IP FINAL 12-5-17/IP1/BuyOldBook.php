<?php
   include('session.php');

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
                <p class="hd1 w3-text-white Lobster" style="margin: 0%; font-size:3.5em; margin-left:4%;margin-right:4%;"><?php echo "$Category"; ?></p>
                <hr style="width:92%; display:block;margin:auto;">
                
            </div>
               <div class="row" style="padding: 0 4% 0">
                
                    <?php
                        $query="Select BookName,BookImagePath,Edition,Price,token from bookinfo where Category='$Category';";
                        $response=mysqli_query($dbc,$query) 
                                    or 
                                    die(mysqli_error($dbc));
                   $count = mysqli_num_rows($response);
                   
                        while($row=mysqli_fetch_array($response))
                        {
                      
                            echo '<a  onclick="token('.$row[4].')"><div class="col-md-3 w3-animate-zoom w3-animate-opacity" style="padding:0.1%; margin-top:0.7%;">
                                        <div style="margin:1%; box-shadow:0 0 0.5em white; padding:4%;">
                                        <header class="hd3" style="color:whitesmoke;">Book Name:</header>
                                        <header class="header hd1" style="color:whitesmoke;">'.$row['BookName'].'</header>
                                        <img src="'.$row['BookImagePath'].'" alt="" style="min-height:300px;max-height:300px; width:100%;margin-bottom:0.5%;">
                                        <header class="hd3" style="color:whitesmoke;">Edition: '.$row['Edition'].'</header>
                                        <header class="hd3" style="color:whitesmoke;">Price: Rs '.$row['Price'].'</header>
                                        <header class="hd3" style="color:whitesmoke;">Book Id: '.$row['token'].'</header>
                                    </div></a>
                                    </div>';
                        }
                    
                    ?>
            </div><br>
            <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <header class="hd2" style="color:whitesmoke">Enter the Book ID to Buy the Book:</header>
                            <form action="http://localhost:1234/IP1/BuyBook.php" method="post">
                                <label>
                                    <p class="hd2">Book ID<sup>*</sup>:</p><br>
                                    <input class="hd3" type="text" placeholder="Book ID" name="BookID" required><br>
                                </label><br>
                                <input type="submit" class="hd3" value="Submit">
                                
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div><br><br>
     
        
        
        
        </div>
        
    </body>
</html>