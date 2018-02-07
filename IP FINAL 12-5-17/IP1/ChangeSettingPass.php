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


            $Oldpass1=md5(stripslashes(trim($_POST["oldpass"])));
        
            $pass1 = md5(stripslashes(trim($_POST["pass1"])));
            $pass2 = md5(stripslashes(trim($_POST["pass2"])));
            
            if($Oldpass==$Oldpass1)
            {
                if($pass1==$pass2){
                $Password=$pass1;
                $sql2 = "Update signup set Password='$Password' where Username='$username';";
                    $result2 = mysqli_query($dbc,$sql2)
                        or
                        die(mysqli_error($dbc));
                    if($result2==1)
                    {
                        echo '<script>alert("Password has beeen changed!");window.open("Welcome.php","_self");</script>';
                    }
                    else
                    {
                        echo '<script>alert("Password not changed!");window.open("AccSetting.php","_self");</script>';
                    }
                }
                else{
                    echo "New Passwords did not match!";
                    
                }
            }
            else{
                echo "Old Password did not match!";
            }