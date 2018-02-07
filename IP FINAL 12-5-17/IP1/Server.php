<!DOCTYPE html>
<html>
<head>
    <title id="title">
        Serverside
    </title>    
    <script>
        function thx()
        {
            alert("Thx for Signing In!");
            document.getElementById("title").innerHTML="Registered!";
            //window.open("session.php","_self");
            window.open("Welcome.php","_self");
        }
        
        function notRegistered()
        {
            alert("Not registered! Try again!");
            document.getElementById("title").innerHTML="Not Registered!";
        }
        function back()
        {
            window.open("Signup.php","_self");
            
        }
    </script>
</head>
<body>
       
    <?php

    require_once('../../mysqli_connect.php');
    
    
    
    $query = "SELECT * FROM signup;";
   
    
    
            $FirstName=stripslashes(trim($_POST["FirstName"]));
            $LastName=stripslashes(trim($_POST["LastName"]));
    
    
            $Email=stripslashes(trim($_POST["Email"]));
            $Username=stripslashes(trim($_POST["Username"]));
            $CountryCode=stripslashes(trim($_POST["CountryCode"]));
            $ContactNo=stripslashes(trim($_POST["ContactNo"]));
    
    
        $pass1 = md5(stripslashes(trim($_POST["pass1"])));
        $pass2 = md5(stripslashes(trim($_POST["pass2"])));
        if($pass1==$pass2){
            $Password=$pass1;
           // echo "Match";
        }
        else{
            echo "passwords did not match!";
            echo "<script>back();</script>";
        }
    
    
    $check=@mysqli_query($dbc,"select * from signup where Email='$Email' and Username='$Username' and ContactNo='$ContactNo';");
    $checkrows=@mysqli_num_rows($check);
//echo $check;
   if($checkrows>0) 
   {
       
      echo "<h1>Error: User already exists!<br></h1>
      <h2>Signup Again!</h2>
      <script>back();</script>";
       $response=0;
   }
    else
    {
        session_start();
        $_SESSION['login_session']=$Username;
        $_SESSION['login_user']=$Username;
        $query1 = "Insert into signup(FirstName,LastName,Email,Username,CountryCode,ContactNo,Password) values('$FirstName','$LastName','$Email','$Username',$CountryCode,$ContactNo,'$Password');";
        $response = @mysqli_query($dbc,$query1);
    }

   
//    echo "Connected<br>";
   /* if($check){
            
        echo '<table align="left" cellspacing="5" cellpadding="8">
                <tr>
                    <td align="Left">
                        <b>First Name</b>
                    </td>
                    <td align="Left">
                        <b>Last Name</b>
                    </td>
                    <td align="Left">
                        <b>Contact No</b>
                    </td>
                <tr>';
        while($row = mysqli_fetch_array($check)){
            echo   '<tr>
                        <td align="Left">'.
                            $row['FirstName'].
                        '</td>
                        <td align="Left">'.
                            $row['LastName'].
                        '</td>'.
                        '<td align="Left">'.
                            $row['ContactNo'].
                        '</td>';
            echo '</tr>';
        }
        
        echo '<table>';
            
    } else{
        
        echo "Couldn't issue database query<br>";
        echo mysqli_error($dbc);
    }*/
    
    if($response)
    {
        echo "<script>thx();</script>";
        echo "<h2>You are registered!</h2>";
    } 
    else
    {
        echo "<script>notRegistered();</script>";
    }
        
mysqli_close($dbc);

?>

</body>
</html>