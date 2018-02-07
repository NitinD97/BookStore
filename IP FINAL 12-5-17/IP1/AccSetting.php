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
                        
                        <div class="row" >
                             
                                 <p class="Form-Header" style="text-align:left; margin-left:3%;">ABOUT YOU</p>
                                 <div class="col-md-1"></div>
                                 <div class="col-md-7 hd2" style="color:whitesmoke;">
                                     <span class="satisfy">Your Name : </span><span class="satisfy"><?php  echo "$FirstName $LastName"; ?></span><br>
                                     <span class="satisfy">Username : </span><span class="satisfy"><?php  echo $username; ?></span><br>
                                     <span class="satisfy">Email : </span><span class="satisfy"><?php  echo $Email; ?></span><br>
                                     <span class="satisfy">Contact No : </span><span class="satisfy"><?php  echo $ContactNo; ?></span><br>
                                     <a href="ChangeInfo.php" class="pacifico" style="display:inline-block;background-color:rgba(90,90,90,0.5); border-radius:10px;padding-right:5px; padding-left:5px;">Change Info</a><br>
                                 </div>
                         </div>
                        
                        
                        
                         <div class="row" >
                                 <p class="Form-Header" style="text-align:left; margin-left:3%;">Your Books</p>
                                 <div class="col-md-1"></div>
                                 <div class="col-md-10 hd2" style="color:whitesmoke;">
                                 <?php
                                    $query="Select BookName,BookImagePath,Edition,Price,token from bookinfo where Username='$username';";
                                    $response=mysqli_query($dbc,$query) 
                                                or 
                                                die(mysqli_error($dbc));
                                    while($row=mysqli_fetch_array($response))
                                    {
                                        //echo $row['r'];
                                        echo '<div class="col-md-3 w3-animate-zoom w3-animate-opacity" style="padding:0.1%; margin-top:0.7%;">
                                                    <div style="margin:1%; box-shadow:0 0 0.5em white; padding:4%;">
                                                    <header class="" style="color:whitesmoke;">Book Name:</header>
                                                    <header class="header hd3" style="color:whitesmoke;">'.$row['BookName'].'</header>
                                                    <img src="'.$row['BookImagePath'].'" alt="" style="min-height:200px;max-height:200px; width:100%;margin-bottom:0.5%;">
                                                    <header class="" style="color:whitesmoke;">Edition: '.$row['Edition'].'</header>
                                                    <header class="" style="color:whitesmoke;">Price: Rs '.$row['Price'].'</header>
                                                    <header class="" style="color:whitesmoke;">Book Id: '.$row['token'].'</header>
                                                </div>
                                                </div>';
                                    }
                                ?>                                
                                 </div>
                         </div><br>
                         <hr style="width:84.5%; margin:auto;">
                         <div class="row">
                             <div class="col-md-3"></div>
                             <div class="col-md-6"><br><p class="hd1 pacifico" style="text-align:justify;color:whitesmoke">Enter book Id to change book info or delete Book</p></div>
                             <div class="col-md-3"></div>
                         </div>
                         <div class="row">
                             <div class="col-md-3"></div> 
                             <div class="col-md-6">
                               <br>
                                
                                
                                <form action="http://localhost:1234/IP1/ChangeBInfo.php" method="POST">
                                    
                                    <label>
                                        <p  class="hd2">Book ID<sup>*</sup>:</p><br>
                                        <input class="hd3" type="text" placeholder="Book ID" name="BookID" required><br>
                                        <br>
                                        <div style="width:49%; display:inline-block">
                                        <input class="hd3" type="submit" onclick="Change()" value="Change Info">
                                        </div>
                                        <div style="width:49%; display:inline-block">
                                        <input class="hd3" type="submit" onclick="Delete()" value="Delete Book">
                                        </div>
                                    </label><br>
                                    
                                    
                                </form>
                                 
                             </div> 
                         </div>
     

            
        </div><br>
        <br>
    </body>
</html>