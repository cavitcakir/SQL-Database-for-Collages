<?php


  $con = mysqli_connect("localhost", "root", "", "course_database_bcnf");

  if(!$con)
  {
    echo 'Not connected to server';

  }
  if(!mysqli_select_db($con,'course_database_bcnf'))
  {

    echo 'Database Not Selected';
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  $type= $_POST['type'];


  $sql = "INSERT INTO login_table (username,password,type) VALUES ('$username', '$password', '$type');";


  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not inserted');</script>";

  }
  else {
    echo "<script>alert('Inserted');</script>";
  }

  header("refresh:2; url=insert_new_master.html")


?>
