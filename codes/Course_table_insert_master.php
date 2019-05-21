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
  $Time = $_POST['Time'];
  $Course_Code= $_POST['Course_Code'];
  $Credit=$_POST['Credit'];
  $Class=$_POST['Class'];
  $Instructor_id = $_POST['Instructor_id'];
  $Prerequitise_of= $_POST['Prerequitise_of'];
  $Faculty = $_POST['Faculty'];

  $sql = "INSERT INTO course_teacher (Name, Time, Course_Code, Credit, Class, Instructor_id) VALUES ('$Name', '$Time', '$Course_Code', '$Credit', '$Class' , '$Instructor_id');";
  $sql .= "INSERT INTO belongs_to (Course_Code, Faculty) VALUES ( '$Course_Code', '$Faculty') ";
  if (!(empty($_POST['username']))) {
    $sql .="INSERT INTO prerequisite_of (Course , Prequisite_of) VALUES ('$Course_Code', '$Prerequitise_of');";
  }

  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not inserted');</script>";

  }
  else {
    echo "<script>alert('Inserted');</script>";

  }

  header("refresh:2; url=Course_table_insert_master.html")


?>
