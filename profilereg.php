<?php
session_start();
require "profilere.php";
$fname=&$_POST['fname'];
$sex=&$_POST['sex'];
$tenth=&$_POST['10th'];
$twele=&$_POST['12th'];
$ug=&$_POST['ug'];
$contact=&$_POST['contact'];
$email=&$_POST['email'];
$pas=&$_POST['pas'];
$cpas=&$_POST['cpas'];


if(isset($_POST['submit']))
{

    $sql="INSERT INTO akarts(fname,sex,tenth,twele,ug,contact,email,pas,cpas) 
    VALUES('$fname','$sex','$tenth','$twele','$ug','$contact','$email','$pas','$cpas')";
    $query=mysqli_query($conn,$sql);
    if($query)
    {   
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: profileregister.html");
        exit(0);

    }
    else{
        $_SESSION['message'] = "Already Registerd";
        header("Location: profileregister.html");
        exit(0);
    }


}

?>