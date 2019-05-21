<?php

$con = mysqli_connect("localhost", "root", "", "course_database_bcnf");

mysqli_select_db($con,'course_database_bcnf');

$sql = "UPDATE course_teacher SET Time = '$_POST[Time]', Course_Code = '$_POST[Course_Code]', Class= '$_POST[Class]' , Instructor_Id = '$_POST[Instructor_Id]' WHERE Course_Code = '$_POST[Course_Code]'";

  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not updated');</script>";

  }
  else {
    echo "<script>alert('Updated');</script>";
    header("refresh:1; url = Course_table_update_master.php");
  }

 ?>
