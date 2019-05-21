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

  $Student_ID = $_POST['Student_ID'];
  $Club_Name = $_POST['Club_Name'];

  $sql = "INSERT INTO Joins (Student_ID, Club_Name) VALUES ('$Student_ID', '$Club_Name')";

  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not inserted');</script>";

  }
  else {
    echo "<script>alert('Inserted');</script>";
  }

  header("refresh:2; url=ClubMembers_table_insert_master.html")


?>
