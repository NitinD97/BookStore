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
        <script src="JS/passwordcheck.js"></script>
    </head>
    <body>       
       
        <div class="container">
            <div class="container">
            <header class="header">
                <p class="HomePage w3-animate-opacity">
                    
                    <a href="logout.php" class="w3-animate-left"><img src="Images/Logo%20Of%20book.png"><span>BookWorms</span></a> 
                </p>
                
            </header>
            
            
            
            <div class="row">
               <div class="col-md-4"></div>
               
               <div class="col-md-4 form">
                  <h1 class="Form-Header hd1">Signup</h1>
                  
                  <div class="row AvatarImg">
                        <img src="Images/img_avatar3.png">
                    </div>
                   <form action="http://localhost:1234/IP1/Server.php" method="post">
                    <label>
                        <p class="hd2">First Name<sup>*</sup>:</p><br>
                        <input class="hd3" type="text" placeholder="First Name" name="FirstName" required><br>
                    </label>
                    
                    <label>
                        <p class="hd2">Last Name<sup>*</sup>:</p><br>
                        <input  class="hd3" type="text" placeholder="Last Name" name="LastName" required><br>
                    </label>
                    
                    <label>
                        <p class="hd2">Email<sup>*</sup>:</p><br>
                        <input class="hd3" type="email" placeholder="Email" onkeyup="http://localhost:1234/IP/LoginCheck.php" name="Email" required><br>
                    </label>
                    
                    <label>
                        <p class="hd2">Username<sup>*</sup>:</p><br>
                        <input class="hd3" type="text" placeholder="Username" name="Username" required><br>
                    </label>
                    
                    <label>
                        <p class="hd2">Contact<sup>*</sup>:</p><br><br><br>
                        <select class="hd3" size="1" name="CountryCode" required>
                            <option label="select"></option>
                            <option value="91">+91</option>
                            <option value="92">+92</option>
                            <option value="61">+61</option>
                            <option value="127">+127</option>   
                        </select>
                    </label>
                    <input class="hd3" type="tel" placeholder="Contact No" name="ContactNo" maxlength="10" required><br>
                    
                    
                    <label>
                        <p class="hd2">Password<sup>*</sup>:</p><br>
                        <input class="hd3" id="pass1" type="password" placeholder="Password" name="pass1" required><br>
                    </label>
                    
                    <label>
                        <p  class="hd2">Confirm Password<sup>*</sup>:</p><br>
                        <input class="hd3" id="pass2" onkeyup="checkpass()" type="password" placeholder="Password" name="pass2" required><br>
                    </label><br>
                    <input class="hd3" type="submit" id="Submit" value="Create Account"><br><br>
                    
                    <a href="Login.php" class="input hd3" >Already have an acount?</a>
                </form>
               </div>
                
                <div class="col-md-4"></div>
            </div>
            
            
            
            
            <div class="row section">
                
            </div>
          
            </div>  
        </div>
    </body>
</html>