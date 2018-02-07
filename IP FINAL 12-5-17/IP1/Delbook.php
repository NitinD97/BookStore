
<?php
    include('session.php');

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
          // username and password sent from form 

          $token = mysqli_real_escape_string($dbc,$_POST['BookID']);
        echo $token;
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
                echo '<script> window.open("Address.php","_self");</script>';
            }
        }
        else
        {
            echo '<script>window.open("BuyOldBook.php","_self");alert("Wrong Input!");</script>';
        }
       }
?>
