<?php
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $con=new mysqli("localhost","root","","test");
  if($con -> connect_error){
    die("Failed to connect :" .$con->connect_error);
  }else{
    $sql=$con->prepare("select * from registration where Email=?");
    $sql->bind_param("s",$Email);
    $sql->execute();
    $sql_result=$sql-> get_result();
    if($sql_result->num_rows>0){
      $data=$sql_result->fetch_assoc();
      if($data['Password']===$Password){
        $_SESSION['Email']=$Email;
        //<a href="profile.php?<?php echo 'Email='.$Email?
        header("location:index.html");
      }else{
        echo "<h2>Invalid Email or Password </h2>";
      }
    }else{
      echo "<h2> Invalid Email or Password</h2>";
    }
  }
?>