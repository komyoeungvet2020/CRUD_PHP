<?php
  include "connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM crud WHERE id='$id'";
  $result = mysqli_query($connection,$query);
  header("Location:index.php");
?>