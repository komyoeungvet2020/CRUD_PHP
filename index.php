<?php
 include_once "connection.php";
?>
<?php
$query = "SELECT * FROM crud";
$data = mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="mt-5">
<a href="add.php" class="btn btn-danger">Add new</a>
    <table class="table table-bordered">
      <tr>
       <th>ID</th>
       <th>NAME</th>
       <th>PASSWORD</th>
       <th>ACTION</th>
      </tr>
      <?php
     foreach($data as $value){
     ?>
      <tr>
      <td><?php echo $value['id']?></td>
      <td><?php echo $value['name']?></td>
      <td><?php echo $value['password']?></td>
      <td>
      <a href="delete.php?id=<?php echo $value['id']?>" class="btn btn-info"  > <i class="material-icons" onclick=" return confirm('Are you sure to  delete')">Delete</a>
      <a href="update.php?id=<?php echo $value['id']?>" class="btn btn-danger" >Edit</a>
      </td>
      </tr>
     <?php
     }
      ?>
    </table>
</body>
</html>