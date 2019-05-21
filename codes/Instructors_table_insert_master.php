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
  $Sex= $_POST['Sex'];
  $Office_Number=$_POST['Office_Number'];
  $Contract_id = $_POST['Contract_id'];
  $Faculty = $_POST['Faculty'];
  $PhoneNumber = $_POST['PhoneNumber'];


  $sql = "INSERT INTO People (Name, Mail, ID, Sex) VALUES ('$Name', '$Mail', '$ID', '$Sex');";
  $sql .= "INSERT INTO Instructor (Office_Number , Contract_id ,ID) VALUES ('$Office_Number', '$Contract_id' , '$ID');";
  $sql .= "INSERT INTO Works_In (Instructor_ID, Faculty) VALUES ( '$ID', '$Faculty');";
  $sql .= "INSERT INTO OFFICE (Phone_Number, Office_Number) VALUES ( '$PhoneNumber', '$Office_Number')";


  if(!mysqli_multi_query($con, $sql))
  {
    echo "<script>alert('Not inserted');</script>";

  }
  else {
    echo "<script>alert('Inserted');</script>";
  }

  header("refresh:2; url=Instructors_table_insert_master.html")


?>
