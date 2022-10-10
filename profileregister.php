<?php

require 'arundb.php';

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$sex=$_POST['sex'];


if(isset($_POST['submit']))
{
    $query="INSERT INTO newone(name,email,contact,city,sex) VALUES('$name','$email','$contact','$city','$sex')";
    $query_con=mysqli_query($conn,$query);

    if($query_con)
    {
        header("Location: newphpview.php");
        exit(0);
    }
    else
    {
        echo"error";
    }
}


?>