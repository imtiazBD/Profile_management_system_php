<?php

$id=$_GET['id'];

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];

$conn = mysqli_connect("localhost","root","","info");
$sql="UPDATE personal SET name='$name',email='$email',contact='$contact',age='$age',gender='$gender',birthday='$birthday',address='$address' WHERE id=$id ";

if(mysqli_query($conn,$sql))
{
header("Location: show.php?id=" .$id);
}
else{
    echo "Not Inserted";
}