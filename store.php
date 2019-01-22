<?php

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];
$conn = mysqli_connect("localhost","root","","info");
$sql= "INSERT INTO personal VALUES(NULL,'$name','$email','$contact','$age','$gender','$birthday','$address');";
if(mysqli_query($conn,$sql)){
header("Location: index.php");
}
else{
    echo "Not Inserted";
}