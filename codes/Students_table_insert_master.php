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
  $Sex= $_POST['Sex'];
  $ID=$_POST['ID'];
  $Major=$_POST['Major'];
  $Entrance_Year = $_POST['Entrance_Year'];
  $Total_Credit= $_POST['Total_Credit'];
  $Faculty = $_POST['Faculty'];

  $sql = "INSERT INTO People (Name, Mail, ID, Sex) VALUES ('$Name', '$Mail', '$ID', '$Sex');";
  $sql .= "INSERT INTO student (Major  , Total_Credit ,  Entrance_Year ,ID) VALUES ('$Major', '$Total_Credit' ,  '$Entrance_Year', '$ID' );";
  
  if (!(empty($_POST['Faculty']))) {
    $sql .= "INSERT INTO studies_in (Student_ID, Faculty) VALUES ( '$ID', '$Faculty') ";
  }
  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not inserted');</script>";

  }
  else {
    echo "<script>alert('Inserted');</script>";
  }
  header("refresh:2; url=Students_table_insert_master.html")


?>
