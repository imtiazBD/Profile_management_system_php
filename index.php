<?php
$conn = mysqli_connect("localhost","root","","info");
$sql = "SELECT * FROM personal";
$result= mysqli_query($conn,$sql); 
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
    <a class="btn btn-info" href="add.php">Add Informations</a>
<h3>Personal Information|Home</h3><hr>
  <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>
              Action
            </th>
          </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result))
            { ?>
          
           <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['contact'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['birthday'] ?></td>
            <td><?php echo $row['address'] ?></td>
                <td>
              <a type="button" class="btn btn-info" href="show.php?id=<?php echo $row['id']; ?>">View</a>
              <a type="button" class="btn btn-success" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
              <a type="button" class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a>
            </td>

          </tr>
                           <?php } ?>

        </tbody>
      </table>
    </div>    
</div>
</div>
    

    
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
</body>
</html>