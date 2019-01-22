<?php
$id =$_GET['id'];
$conn = mysqli_connect("localhost","root","","info");
$sql = "SELECT * FROM personal WHERE id=$id";
$result= mysqli_query($conn,$sql); 
$singleinfo= mysqli_fetch_assoc($result);
?>
<doctype! html>
<html>
<head>
<title>
    Curd Systeam
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
<div class="row">  
    <br><br><br>
<div class="col-md-12">
    <a class="btn btn-info" href="index.php">All Informations</a><br>
    <hr>
    <h3 class="text-center"> Personal Details </h3>
     <table class="table">
<tr>
    <th width="50" class="text-right">Name:</th>
    <td> <?php echo $singleinfo['name']; ?></td>

</tr>
<tr>
<th width="100" class="text-right">E-mail:</th>
    <td> <?php echo $singleinfo['email']; ?></td>
</tr>
<tr>
<th width="100" class="text-right">Contact:</th>
    <td> <?php echo $singleinfo['contact']; ?></td>
</tr>
<tr>

</tr>
<tr>
<th width="100" class="text-right">Age:</th>
    <td> <?php echo $singleinfo['age']; ?></td>
</tr>
<tr>
<th width="100" class="text-right">Gender:</th>
    <td> <?php echo $singleinfo['gender']; ?></td>
</tr>
<tr>
<th width="100" class="text-right">Birthday:</th>
    <td> <?php echo $singleinfo['birthday']; ?></td>
</tr>
<tr>
<th width="100" class="text-right">Address:</th>
    <td> <?php echo $singleinfo['address']; ?></td>
</tr>
      </table>
</div>    
</div>
</div>
    

    
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
</body>
</html>