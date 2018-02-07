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
                    <button class="w3-button"><a href="AccSetting.php">Account Settings</a></button>
                    
                             
                        <button class="w3-button php-name" style=" display:inline-block; float:right; ">
                            Hello, <?php  echo $login_session; ?> <br><a href="logout.php" class="w3-text-white w3-hover-text-black" style=" font-size:0.75em; padding:1%;">Logout</a>
                        </button>
                    </div>
            </header>
                         <br>
                        <div class="row">
                            <div class="col-md-8">
                               <div class="w3-content w3-display-container" style="box-shadow:0 0 3em whitesmoke;margin:auto; width:100%; background-color:black;">
                                <img class="mySlides" src="Images/Slide1.jpg" style="box-shadow:0 0 1em royalblue; width:90%;margin:auto;">
                                <img class="mySlides" src="Images/Slide2.jpg" style="box-shadow:0 0 1em whitesmoke; width:90%;margin:auto;">
                                <img class="mySlides" src="Images/Slide3.jpg" style="box-shadow:0 0 1em whitesmoke; width:90%;margin:auto;">
                                <img class="mySlides" src="Images/Slide4.jpg" style="box-shadow:0 0 1em whitesmoke; width:90%;margin:auto;">
                                <img class="mySlides" src="Images/Slide5.jpg" style="box-shadow:0 0 1em whitesmoke; width:90%;margin:auto;">
                                <img class="mySlides" src="Images/Slide6.jpg" style="box-shadow:0 0 1em whitesmoke; width:90%;margin:auto;">
                                
                                
                                   
                                <div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                                    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                                    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
                                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
                                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
                                </div>
                               </div>
                            </div>
                            <p id="Lessthan500px" style="display:none"><br></p>
                            
                            <div class="col-md-4">
                                <div class="Quotes " style="padding-left:2%;box-shadow:0 0 3em whitesmoke;";>
                                    <p style="font-family: 'Kaushan Script', cursive;color: whitesmoke; margin-right:0%; font-size:1.5em; padding:5%;">
                                        "A reader lives a thousand lives before he dies."
                                    </p>
                                    <p style="color: whitesmoke; margin-right:7%; font-size:1em; padding:0;">
                                        &nbsp;- GEORGE RR MARTIN -
                                    </p><br>
                                </div>
                                <hr>
                                <div class="Quotes" style="padding-left:2%;box-shadow:0 0 3em whitesmoke;";>
                                    <p style="font-family: 'Kaushan Script', cursive;color: whitesmoke; margin-right:7%; font-size:1.5em; padding:5%;">
                                        "Books are Uniquely portable Magic."
                                    </p>
                                    <p style="color: whitesmoke; margin-right:7%; font-size:1em; padding:0;">
                                        &nbsp;- STEPHEN KING -
                                    </p><br>
                                </div>
                                <hr>
                                <div class="Quotes" style="padding-left:2%;box-shadow:0 0 3em whitesmoke;";>
                                    <p style="font-family: 'Kaushan Script', cursive;color: whitesmoke; margin-right:7%; font-size:1.5em; padding:4.5%;">
                                        "There are worst crimes than burning Books. One of them is not reading them."
                                    </p>
                                    <p style="color: whitesmoke; margin-right:7%; font-size:1em; padding:0;">
                                        &nbsp;- JOSEPH BRODSKY -
                                    </p><br>
                                </div>
                                <hr>
                                <div class="Quotes " style="padding-left:2%;box-shadow:0 0 3em whitesmoke;";>
                                    <p style="font-family: 'Kaushan Script', cursive;color: whitesmoke; margin-right:7%; font-size:1.5em; padding:4.5%;">
                                        "A good Book has no Ending."
                                    </p>
                                    <p style="color: whitesmoke; margin-right:7%; font-size:1em; padding:0;">
                                        &nbsp;- R. D. CUMMING -
                                    </p><br>
                                </div>
                            </div>
                        </div>
                         <br>
                         <br><br>
                         <div class="row">
                             <div class="col-md-4" style="padding-left:1%;padding-right:1%;">
                                 <span class="hd2 center Lobster" >Sell Old Books</span>
                                 <p class="hd3 pacifico" style="color:whitesmoke;">
                                     Upload the information about the books you want to sell. The people who want to buy them will contact you.<br><br>Earn from old, as much you can!
                                 </p>
                             </div>
                             <div class="col-md-4" style="padding-left:1%;padding-right:1%;">
                                 <span class="hd2 center Lobster" >Search</span>
                                 <p class="hd3 pacifico" style="color:whitesmoke;">
                                     Search the uploaded books and fix an appointment with the owner directly to buy them.<br><br>Why purchase new? Let's go with old and save a lot of money!
                                 </p>
                             </div>
                             <div class="col-md-4" style="padding-left:1%;padding-right:1%;">
                                 <span class="hd2 center Lobster" >More Information</span>
                                 <p class="hd3 pacifico" style="color:whitesmoke;">
                                     This is a user-friendly platform to sell and buy old books with relative ease.<br><br>We target in particular organisations/ colleges to make the process simple.
                                 </p>
                             </div>
                         </div>
                        <br><br>
                       
                       <div class="row">
                           <div class="col-md-3"></div>
                           <div class="col-md-3"><a class=" hd2 center pacifico" href="AboutUS.php">About Us</a></div>
                           <div class="col-md-3">
                               <a class=" hd2 center pacifico">Contact Us:</a><br>
                               <span class="hd3 center ">bookstore@gmail.com</span>
                           </div>
                           <div class="col-md-3"></div>
                       </div>
                        
                   
                
            <script>
                
                
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) 
                {
                  showDivs(slideIndex += n);
                }

                function currentDiv(n) 
                {
                  showDivs(slideIndex = n);
                }

                function showDivs(n) 
                {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    if (n > x.length) 
                    {
                        slideIndex = 1
                    }    
                    if (n < 1) 
                    {
                        slideIndex = x.length
                    }
                    for (i = 0; i < x.length; i++) 
                    {
                        x[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) 
                    {
                        dots[i].className = dots[i].className.replace(" w3-white", "");
                    }
                    x[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " w3-white";
                }
            </script>

            
        </div>
    </body>
</html>