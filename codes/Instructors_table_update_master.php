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

  $sql = "SELECT * FROM student";

  $records = mysqli_query($con, $sql);

?>

<style type="text/css">table, tr, td { background-color:transparent;}div table tr td {background-color: C90000 !important;}div table tr td a:link, div table tr td a:visited, div table tr td a:hover {color: FF1493 !important; font-weight: bold !important;}table {background-color: transparent !important;}table table table td {background-color: 000000 !important;}table table table table td {color: FFFFFF !important;}.clearfix {background-color: 000000 !important;}.profileInfo {border: C90000 2px solid !important;}.interestsAndDetails, .userProfileDetail, .contactTable {background-color: 000000 !important; border: C90000 2px solid !important; width: 300px !important;}.extendedNetwork , .latestBlogEntry, .blurbs, .friendSpace,.friendsComments {background-color: 000000 !important; border: C90000 2px solid !important;}span, .btext, .orangetext15 {background-color: transparent !important;}a {font-weight: normal !important; color: FF1493 !important;}b, span, .btext, .orangetext15, .whitetext12  {color: FFFFFF !important;}.text  {color: FFFFFF !important;}.lightbluetext8 {color: FF1493 !important;}a.text:link, a.text:visited {font-weight: bold; color:C90000 !important;}div object {background-color: 000000 !important; border: C90000 2px solid !important;}ul li div span div {background-color: 000000 !important; border: C90000 2px solid !important;}table.contactTable tr td.text {background-color: 000000 !important;}table.contactTable td.tdborder table td{background-color: FF1493 !important;}table.contactTable td.tdborder{background-color: FF1493 !important;}div ul li a.open:link,div ul li a.open:visited,div ul li a.open:hover{background-color: FF1493 !important;}div ul li small{color: ffccdd !important;}.bodyContent{background-color: transparent;}body {background:url(http://www.fillster.com/images/backgrounds/4f.gif);background-attachment:fixed;background-repeat:repeat;}table tr td div, div div a.text:link, div div a.text:visited, div div a.text:hover, div div a.text:active, div div p a:link, div div p a:visited, div div p a:hover, div div p a:active {color: CCCCCC !important;}</style><center><br /><a href="http://www.fillster.com/myspace-backgrounds/" target="_blank"></a></center>

<style>


/* The dropdown container */
.dropdown {
  float: center;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 10px;
  border: none;
  outline: none;
  color: deeppink;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
  padding: 5px 12px;

}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: lightpink;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: relative;
  background-color: #f9f9f9;
  min-width: 50px;
  box-shadow: 0px 8px 16px 0px white;
  z-index: 1;
  padding: 12px 16px;

}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: white;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--  using boost library    -->

  <?php
  error_reporting(E_ALL ^ E_DEPRECATED);

  $link = mysqli_connect("localhost", "root", "", "course_database_bcnf");


  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  ?>

  <head>

    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <title>Site title</title>
        <meta name="description" content="Course Databse">
        <meta name="author" content="Erkin Yasemin Ceren Cavit Umut">
        <meta charset="utf-8">
        <title>Site title</title>
        <meta name="description" content="CS306 Project">
        <meta name="author" content="Erkin Yasemin Ceren Cavit Umut">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
                  <img src="Erkin.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                  Course Database <h3><small>Made by: Erkin Alacamli, Yasemin Utkueri, Ceren Anil, Cavit Cakir, Umut Onat</small></h3>
                </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a class="nav-link" href="Welcome_Page_master.html"> Entry Page <span class="sr-only"></span></a>
                </li>
                <div class="dropdown">
                  <button class="dropbtn">People
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="Students_master.php">Students</a>
                    <a href="Instructor_master.php">Instructors</a>
                  </div>
                </div>
              </li>
              <a class="nav-link" href="Clubs_master.php">Clubs <span class="sr-only"></span></a>
              </li>
              <a class="nav-link" href="Courses_master.php">Courses <span class="sr-only"></span></a>
              </li>
              <div class="dropdown">
                <button class="dropbtn">Faculties
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="FENS_master.php">FENS<span class="sr-only">(Current)</span></a>
                  <a href="FASS_master.php">FASS<span class="sr-only"></span></a>
                  <a href="FMAN_master.php">FMAN<span class="sr-only"></span></a>
                </div>
              </div>
              </li>
              <div class="dropdown">
                <button class="dropbtn">Insert
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="Students_table_insert_master.html">Insert new student<span class="sr-only"></span></a>
                  <a href="Instructors_table_insert_master.html">Insert new instructor<span class="sr-only"></span></a>
                  <a href="Course_table_insert_master.html">Insert new course<span class="sr-only"></span></a>
                  <a href="Clubs_table_insert_master.html">Insert new club<span class="sr-only"></span></a>
                  <a href="ClubMembers_table_insert_master.html">Insert new club member<span class="sr-only"></span></a>
                  <a href="insert_new_master.html">Insert new user<span class="sr-only"></span></a>

                </div>
              </div>
              </li>
              <div class="dropdown">
                <button class="dropbtn">Update
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="Students_table_update_master.php">Update student<span class="sr-only"></span></a>
                  <a href="Instructors_table_update_master.php">Update instructor<span class="sr-only"></span></a>
                  <a href="Course_table_update_master.php">Update course<span class="sr-only"></span></a>
                  <a href="Clubs_table_update_master.php">Update club<span class="sr-only"></span></a>
                </div>
              </div>
              </li>
              <a class="nav-link" href="Search_master.php">ID Search <span class="sr-only"></span></a>
              </li>
            </li>
            <a class="nav-link" href="Delete_master.php">Delete person <span class="sr-only"></span></a>
            </li>
          </li>
          <a class="nav-link" href="logout_page.php">Logout <span class="sr-only"></span></a>
          </li>
            </ul>

          </div>
        </nav>

  </head>

  <style>


  .table {
     margin: auto;
     width: 50% !important;
  }

  </style>

<html>

<style>

input[type="text"], input[type="int"] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 8px;
   -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out
  border-style: solid;
  border-width: 3px;
   border-color: #FF1493;
}

input:focus {
  width: 32%;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #FF1493;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
form {
  position: relative;

  width  : 300 px;
  height : auto;
  margin : 0 auto;

  background: #FFF;
}

</style>


  <style>


  .table {
     margin: auto;
     width: 50% !important;
	 background-color: white
  }

  </style>


<table class="table table-striped table-hover table-responsive" style= "background-color : white ">

                <tr style= "background-color : white ">
                    <th> ID </th>
                    <th> Office_Number </th>
                    <th> Contract_ID </th>
                    <th> Phone Number </th>
                </tr>
				<?php

        while($row = mysqli_fetch_array($records))

          echo "<tr><form action=Instructors_table_update2_master.php method = post>";
          echo "<td><input type = text name = ID value='".$row['ID']."'</td>";
          echo "<td><input type = text name = Office_Number value='".$row['Office_Number']."'</td>";
          echo "<td><input type = text name = Contract_ID value='".$row['Contract_ID']."'</td>";
          echo "<td><input type = text name = Phone_Number value='".$row['Phone_Number']."'</td>";

          echo "<td><input type=submit>";
          echo "</form></tr>";

				?>

</table>
