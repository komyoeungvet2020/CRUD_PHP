
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php
include "connection.php";
$id = $_GET['id'];
$query = mysqli_query($connection,"SELECT *FROM crud WHERE id='$id'");
foreach($query as $result){
    ?>
    <div class="container mt-5">
       <div class="row">
         <div class="col-3"></div>
         <div class="col-6">
          <div class="card">
          <div class="card-header"><strong>Login</strong></div>
          <div class="card-body">
             <form action="#" method="post">
               <div class="form-group">
               <input type="text" name="name" class="form-control" placeholder="username" value="<?php echo $result['name']?>">
               </div>
               <div class="form-group">
               <input type="password" name="pass" class="form-control" placeholder="password" value="<?php echo $result['password']?>">
               </div>
               <button type="submit" class="btn btn-primary form-control" name="sub">Submit</button>
             </form>
             <?php
             }
             ?>
          </div>
          </div>
         <div class="col-3"></div>
       </div>
    </div>
</body>
</html>
</div>
         <?php
           include_once "connection.php";
           if(isset($_POST['sub'])){
            $id = $_GET['id'];
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $query = "UPDATE crud SET name='$name',password='$pass' WHERE id='$id'";
            $result = mysqli_query($connection,$query); 
            header("Location:index.php");
           }
   ?>