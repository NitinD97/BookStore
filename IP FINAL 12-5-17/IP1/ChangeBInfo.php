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
    $token=$_POST['BookID'];
   
    $Button =  $_COOKIE['Button'];
    

    if($Button=='Delete')
    {
        $q1="Select * from bookinfo where token='$token';";
        $result1=mysqli_query($dbc,$q1);
        $row = mysqli_fetch_array($result1);
        $count = mysqli_num_rows($result1);
        if($count>0)
        {
            $q2="Delete from bookinfo where token='$token';";
            $result2 = mysqli_query($dbc,$q2);
            if($result2==1)
            {
                echo '<script> window.open("AccSetting.php","_self");</script>';
            }
        }
        else
        {
            echo '<script>window.open("AccSetting.php","_self");alert("wrong input");</script>';
        }
    }
    else if($Button=='Change')
    {
        $q3="Select BookName,Category,BookImagePath,Edition,Price,token from bookinfo where token='$token'";
        $result3 = mysqli_query($dbc,$q3);
        $row = mysqli_fetch_array($result3);
        $BookName=$row['BookName'];
        $Category=$row['Category'];
        $Edition=$row['Edition'];
        $Price=$row['Price'];
        $token=$row['token'];
        $Path=$row['BookImagePath'];
        
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
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="background-color:rgba(250,250,250,0.5);padding-top:15px; padding:4px; border-radius:2%;">
                    <img src='<?php echo "$Path"; ?>' alt="" style="width:100%px; height:100%;min-width:498px;max-width:498px;max-height:498px;border:3px solid white; border-radius:15%;">
                    
                    <form method="post" action="http://localhost:1234/IP1/BookInfoChanged.php">
                        <label><br>
                            <p  class="hd2">Book Name<sup>*</sup>:</p><br>
                            <input class="hd3" type="text" placeholder="Book Name" value="<?php echo $BookName; ?>" name="NBookName" required><br>
                        </label>
                        <label><br>
                            <p  class="hd2">Edition<sup>*</sup>:</p><br>
                            <input class="hd3" type="text" placeholder="Edition" value="<?php echo $Edition; ?>" name="NEdition" required><br>
                        </label>
                        <label>
                            <input class="hd3" type="hidden" placeholder="token" value="<?php echo $token; ?>" name="Ntoken"><br>
                        </label>
                        <label>
                            <p  class="hd2">Price<sup>*</sup>:</p><br>
                            <input class="hd3" type="text" placeholder="Price" value="<?php echo $Price; ?>" name="NPrice" required><br>
                        </label><br>
                         <input class="hd3" type="submit" id="Submit" value="Change Info"><br>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
     

            
        </div><br>
        <br>
    </body>
</html>