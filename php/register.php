<?php
include 'connection.php';
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Address=$_POST['Address'];
    $con=mysqli_connect("localhost","root","","test");
    $sql="INSERT INTO registration(FirstName, LastName, Email, Password, PhoneNumber, Address) values('$FirstName', '$LastName', '$Email', '$Password', '$PhoneNumber', '$Address')";
    $r=mysqli_query($con,$sql);
    if($r){
        header("location:loginPage.html");
       // echo "Registered Sucessfully";
    }else{
        echo "Details Not Added";
    }
?>