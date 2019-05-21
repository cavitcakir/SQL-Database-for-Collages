<?php

$con = mysqli_connect("localhost", "root", "", "course_database_bcnf");

mysqli_select_db($con,'course_database_bcnf');


$sql = "UPDATE student SET ID = '$_POST[ID]', Major = '$_POST[Major]', Entrance_Year= '$_POST[Entrance_Year]', Total_Credit = '$_POST[Total_Credit]' WHERE ID = $_POST[ID] ";

  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not updated');</script>";

  }
  else {
    echo "<script>alert('Updated');</script>";
    header("refresh:1; url=Students_table_update_master.php");

  }

 ?>
