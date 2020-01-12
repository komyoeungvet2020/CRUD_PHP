
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
       <div class="row">
         <div class="col-3"></div>
         <div class="col-6">
          <div class="card">
          <div class="card-header"><strong>Login</strong></div>
          <div class="card-body">
             <form action="#" method="post">
               <div class="form-group">
               <input type="text" name="name" class="form-control" placeholder="username">
               </div>
               <div class="form-group">
               <input type="password" name="pass" class="form-control" placeholder="password">
               </div>
               <button type="submit" class="btn btn-primary form-control" name="sub">Submit</button>
             </form>
          </div>
          </div>
         </div>
         
         <div class="col-3"></div>
       </div>
    </div>
</body>
</html>
<?php
        if(isset($_POST['sub'])){
            include_once "connection.php";
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $query = "INSERT INTO crud(name,password) VALUES('$name','$pass')";
            $result = mysqli_query($connection,$query);
            header('Location:index.php');
        }
         ?>