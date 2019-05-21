<?php

$con = mysqli_connect("localhost", "root", "", "course_database_bcnf");

mysqli_select_db($con,'course_database_bcnf');


$sql = "INSERT INTO OFFICE (Phone_Number, Office_Number) VALUES ('$_POST[Phone_Number]', '$_POST[Office_Number]');";
$sql .= "UPDATE instructor SET ID = '$_POST[ID]', Office_Number = '$_POST[Office_Number]', Contract_ID= '$_POST[Contract_ID]' WHERE ID = '$_POST[ID]' ";


  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not updated');</script>";

  }
  else {
    echo "<script>alert('Updated');</script>";
    header("refresh:1; url = Students_table_update_master.php");
  }

 ?>
