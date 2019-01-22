<?php
$conn = mysqli_connect("localhost","root","","info");
$id=$_GET['id'];
$conn =mysqli_connect("localhost","root","","info");
$sql = "SELECT * FROM personal WHERE id=$id";
$result=mysqli_query($conn,$sql);
$std=mysqli_fetch_assoc($result);

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
      <form action="update.php?id=<?php echo $id ?> " method="post">
          <div class="form-group">
          <label for="name">Name</label>
          <input required type="text" class="form-control" name="name" value= <?php echo $std['name']?>
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input required type="text" class="form-control" name="email" value= <?php echo $std['email']?>
        </div>
            <div class="form-group">
          <label for="Contact">Contact</label>
          <input required type="text" class="form-control" name="contact" value= <?php echo $std['contact']?>
        </div>
            <div class="form-group">
          <label for="age">Age</label>
        <input type="text" class="form-control" name="age" value= <?php echo $std['age']?>
        </div>
            <div class="form-group">
          <label for="gender">Gender</label>
          <input required type="text" class="form-control" name="gender" value= <?php echo $std['gender']?>
        </div>
            <div class="form-group">
          <label for="birthday">Birthday</label>
          <input type="text" class="form-control" name="birthday" value= <?php echo $std['birthday']?>
        </div>
            <div class="form-group">
          <label for="address">Address</label>
          <input required type="text" class="form-control" name="address" value= <?php echo $std['address']?>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a type="submit" class="btn btn-info" href="index.php">Cancel</a>

      </form>    
</div>
</div>
</div>
    

    
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
</body>
</html>