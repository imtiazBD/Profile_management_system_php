<?php
$conn = mysqli_connect("localhost","root","","info");
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
    <a class="btn btn-info" href="index.php">View Informations</a>    
    <h3>Add Personal Information</h3><hr>
      <form action="store.php" method="post">
          <div class="form-group">
          <label for="name">Name</label>
          <input required type="text" class="form-control" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input required type="text" class="form-control" name="email" placeholder="Enter E-Mail">
        </div>
            <div class="form-group">
          <label for="Contact">Contact</label>
          <input required type="text" class="form-control" name="contact" placeholder="Enter Contact">
        </div>
            <div class="form-group">
          <label for="age">Age</label>
        <input type="text" class="form-control" name="age" placeholder="Enter Age">
        </div>
            <div class="form-group">
          <label for="gender">Gender</label>
          <input required type="text" class="form-control" name="gender" placeholder="Enter Gender">
        </div>
            <div class="form-group">
          <label for="birthday">Birthday</label>
          <input type="text" class="form-control" name="birthday" placeholder="Enter Birthday">
        </div>
            <div class="form-group">
          <label for="address">Address</label>
          <input required type="text" class="form-control" name="address" placeholder="Enter Address">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>    
</div>
</div>
</div>
    

    
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
</body>
</html>