<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "course_database_bcnf");


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if (isset($_POST))
{

  if(empty($_POST['username']) || empty($_POST['password'])   )
  {
  	echo "<script>alert('You have an empty field.');</script>";

      	echo"<script>location.assign('login_page.html')</script>";  // go back to the login page
  }


		$username = mysqli_real_escape_string($link,$_POST['username']);     // to get rid of the tricky characters which can destroy the database.
		$password = mysqli_real_escape_string($link,$_POST['password']);  // turn into a hash function.

	  $mysql_result= mysqli_query($link,"SELECT * FROM login_table WHERE username = '$username' AND password = '$password' LIMIT 1 ");
    $row_cnt = mysqli_num_rows($mysql_result);


			if($row_cnt!=1)   // if there is no such user like that.
		{
			echo "<script>alert('The username or the password does not exist in the database');</script>";

				echo"<script>location.assign('login_page.html')</script>";  // go back to the login page
		}

  else {
		$mysql_result= mysqli_query($link,"SELECT * FROM login_table WHERE username LIKE '$username' AND password LIKE '$password' AND type LIKE 'ADMIN' LIMIT 1 ");
		$row_cnt = mysqli_num_rows($mysql_result);
			echo "<script>alert('You have succesfully entered the system !');</script>";
			if($row_cnt!=1)   // if there is no such user like that.
		{
			echo "<script>alert('You are a regular user:(');</script>";

				echo"<script>location.assign('Welcome_Page_reg.html')</script>";  // go back to the login page
		}
		else{
			echo "<script>alert('Welcome master');</script>";

				echo"<script>location.assign('Welcome_Page_master.html')</script>";  // go back to the login page
		}
			//session_start(); // remember the variables that are used. Use this in another page if you want to remember the variables that you get here.
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

      	//echo"<script>location.assign('Welcome_Page.html')</script>";  // go to the new page



		}
}
?>
