<?php

$con = mysqli_connect("localhost", "root", "", "course_database_bcnf");

mysqli_select_db($con,'course_database_bcnf');


$sql = "UPDATE clubs SET Name = '$_POST[Name]', Email = '$_POST[Email]', President_ID= '$_POST[President_ID]' WHERE Name = '$_POST[Name]' ";


  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not updated');</script>";

  }
  else {
    header("refresh:1; url=Clubs_table_update_master.php");
    echo "<script>alert('Updated');</script>";
  }

 ?>
