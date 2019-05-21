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

  $Name = $_POST['Name'];
  $Mail = $_POST['Mail'];
  $ID=$_POST['ID'];

  $sql = "INSERT INTO clubs (Name, Email, President_ID) VALUES ('$Name', '$Mail', '$ID');";
  $sql .= "INSERT INTO Joins (Student_ID, Club_Name) VALUES ('$ID', '$Name')";

  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not inserted');</script>";

  }
  else {
    echo "<script>alert('Inserted');</script>";
  }

  header("refresh:2; url=Clubs_table_insert_master.html")


?>
