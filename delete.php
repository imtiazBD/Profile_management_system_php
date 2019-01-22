<?php 
$id= $_GET['id'];
$conn=mysqli_connect("localhost","root","","info");
$sql="DELETE FROM personal WHERE id=$id";
if(mysqli_query($conn,$sql)) {
    header("Location: index.php");
    
}
else {
    echo "No Deleted";
}