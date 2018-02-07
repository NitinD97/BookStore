<?php
    include("session.php");
    
    $Username=$_SESSION['login_user'];
    
    $query1="Select Email from signup where Username='$Username';";
    $result = mysqli_query($dbc,$query1);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $Email= $row['Email'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $Category =stripslashes(trim($_POST['Category']));
        $BookName=stripslashes(trim($_POST['BookName']));
        $Edition=stripslashes(trim($_POST['Edition']));
        $Price=stripslashes(trim($_POST['Price']));
        
        function GetImageExtension($imagetype)
        {
            //echo "$imagetype";
            if(empty($imagetype)) return false;
            switch($imagetype)
            {
                case 'image/bmp': return '.bmp'; 
                case 'image/gif': return '.gif';
                case 'image/jpeg': return '.jpg';
                case 'image/jpg': return '.jpg';
                case 'image/png': return '.png';
                default: return false;
            }
        }
        
           // echo $Edition;
        
        if (!empty($_FILES["BookImageID"]["name"])) 
        {
            $tquery="Select max(token) from bookinfo;";
            $response=mysqli_query($dbc,$tquery) 
                                    or 
                                    die(mysqli_error($dbc));
            $srow=mysqli_fetch_array($response);
            $token=$srow[0]+1;
            echo "$Category";
            $file_name=$_FILES["BookImageID"]["name"];
            $temp_name=$_FILES["BookImageID"]["tmp_name"];
            $imgtype=$_FILES["BookImageID"]["type"];
            $ext= GetImageExtension($imgtype);
            $BookImageID=date("d-m-Y")."-".time().$ext;
            $target_path = "Images/UserImages/".$BookImageID;
            if(move_uploaded_file($temp_name, $target_path)) 
            {
                $query_upload="INSERT into bookinfo (Username,Email,Category,BookName,BookImageID,BookImagePath,Edition,Price,token) VALUES('$Username','$Email','$Category','$BookName','$BookImageID', '$target_path','$Edition','$Price','$token')";
                $response=mysqli_query($dbc,$query_upload)
                    or 
                die("error in $query_upload == ----> ".mysqli_error($dbc)); 
                if($response)
                {
                    echo "<script>f1();</script>";
                    header("location: Welcome.php");
                }
            }
            else
            {
                exit("Error While uploading image on the server");
            }
        }
        
    
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
        <title>
            BookWorms!
        </title>
        
        <style>
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
        </style>
    </head>
    
    <body>
       <?php 
        ?>
            
        <div class="container">
            <header class="header">
                <p class="HomePage w3-animate-opacity">
                    
                    <a href="Welcome.php" class="w3-animate-left"><img src="Images/Logo%20Of%20book.png"><span>BookWorms</span></a> 
                </p>
                        
            </header>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                   <h1 class="Form-Header hd1">Enter Book Information</h1>
                    <form action="" enctype="multipart/form-data" method="post">
                        <label>
                            <p class="hd2">Username<sup>*</sup>:</p><br>
                            <input class="hd3" type="text" placeholder="Username" name="Username" value="<?php echo $Username; ?>" required><br>
                        </label>
                        
                        <label>
                            <p class="hd2">Email<sup>*</sup>:</p><br>
                            <input class="hd3" type="email" placeholder="Email" value="<?php echo $Email; ?>" name="Email" required><br>
                        </label>
                        
                        <label>
                            <p class="hd2">Category<sup>*</sup>:</p><br><br>
                            <select class="hd3" size="1" name="Category" style="width:96%;" required>
                                <option label="select"></option>
                                <option value="Engineering">Engineering</option>
                                <option value="Novel">Novel</option>   
                            </select>
                        </label>
                        
                        <label>
                            <p class="hd2">Book Name<sup>*</sup>:</p><br>
                            <input class="hd3" type="text" placeholder="Book Name" name="BookName" required><br>
                        </label>
                        
                        <label>
                            <p class="hd2">Book Image<sup>*</sup>:</p><br>
                            <input class="hd3" type="file" style="color:whitesmoke;" placeholder="Book Image" name="BookImageID" required><br>
                        </label>
                        
                        <label>
                            <p class="hd2">Edition<sup>*</sup>:</p><br>
                            <input class="hd3" type="text" placeholder="Edition" name="Edition" required><br>
                        </label>
                        
                        
                        <label>
                            <p class="hd2">Price<sup>*</sup>:</p><br>
                            <input class="hd3" type="number" style="width:96%; border-radius:7px;" maxlength="4" placeholder="Price" name="Price" required><br>
                        </label><br>                             
                        
                        <input type="submit" class="hd3" value="Done!"><br><br>
                        
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        
        
        
        
        
        </div>
    </body>
</html>