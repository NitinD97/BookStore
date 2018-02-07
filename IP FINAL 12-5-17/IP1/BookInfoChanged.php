<?php
    include('session.php');

    $NBookName = mysqli_real_escape_string($dbc,$_POST['NBookName']);
      $NEdition = mysqli_real_escape_string($dbc,$_POST['NEdition']); 
      $NPrice = mysqli_real_escape_string($dbc,$_POST['NPrice']); 
      $token = mysqli_real_escape_string($dbc,$_POST['Ntoken']); 
      
      $sql = "Update bookinfo set BookName='$NBookName',Price='$NPrice',Edition='$NEdition' where token='$token';";
      $result = mysqli_query($dbc,$sql)
                or
                die($dbc);
      if($result)
      {
          echo '<script>window.open("AccSetting.php","_self");alert("Book Info Updated")</script> ';
      }
      else
      {
          echo '<script>window.open("ChangeBInfo.php","_self");alert("Book Info not Updated");</script> ';
      }

?>