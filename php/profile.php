<?php
 $FirstName=$_POST['FirstName'];
 $LastName=$_POST['LastName'];
 $Email=$_POST['Email'];
 $Password=$_POST['Password'];
 $PhoneNumber=$_POST['PhoneNumber'];
 $Address=$_POST['Address'];
 $con=new mysqli("localhost","root","","test");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/Profile.css">
    <title>Profile Page</title>
</head>
<body class="profile-page">
    <div class="wrapper">
        <h2>Profile</h2>
        <form action="" method="post" enctype="multipart/form-data">
                   <div class="inputBox">
                        <input type="text" id="FirstName" name="FirstName" placeholder="FirstName" value="<?php echo $FirstName; ?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="LastName" name="LastName" placeholder="LastName" value="<?php echo $LastName; ?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="Email" id="Email" name="Email" placeholder="Email Address" value="<?php echo $Email; ?>" disabled required>
                    </div>
                    <div class="inputBox">
                        <input type="Password" id="Password" name="Password" placeholder="Password" value="<?php echo $Password; ?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="number" id="Phonenumber" name="PhoneNumber" placeholder="PhoneNumber" value="<?php echo $PhoneNumber; ?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="Address" name="Address" placeholder="Address" value="<?php echo $Address; ?>" required>
                    </div>
            <div>
                <button type="submit" name="submit" class="btn"><a href="http://localhost/project/Home.html">LOG OUT</a></button>
            </div>
        </form>
    </div>
</body>
</html>
