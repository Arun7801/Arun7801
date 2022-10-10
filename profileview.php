<?php
require 'profilere.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student CRUD</title>
</head>
<body>
<h1>AK ARTS MEMBER<a href="profile.html" class="btn">Back</a></h1>
<table>
    <tr>Name</tr>
    <tr>Contact</tr>
    <tr>Email</tr>

    <tbody>
    <?php
    $sql="SELECT id,fname,contact,email FROM akarts";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)
    {
        foreach($query as $akarts)
        {
            ?>
            <tr>
            <td><?= $akarts['id']; ?></td>
            <td><?= $akarts['fname']; ?></td>
            <td><?=$akarts['contact'];?></td>
            <td><?=$akarts['email']?></td>
            </tr>
         <?php   
        }
    }
    else{
        echo"<h5>Not Found on Data</h5>";
    }
?>
    </tbody>


</table>
</body>
