<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

</head>
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Montserrat", sans-serif
  }

  body {
    background-color: darkcyan;
  }

  .w3-row-padding img {
    margin-bottom: 12px
  }

  /* Set the width of the sidebar to 120px */
  .w3-sidebar {
    width: 120px;
    background: #ebebeb;
  }

  /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
  #main {
    margin-left: 120px
  }

  /* Remove margins from "page content" on small screens */
  @media only screen and (max-width: 600px) {
    #main {
      margin-left: 0
    }
  }
</style>
<bodyclass="w3-dark-gray">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <p>Home</p>
      <a href="student.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <p>Student</p>
      </a>
      <a href="attandance.php" class="w3-bar-item w3-button w3-padding-large w3-black">
        <p>Attandance</p>


  </nav>>



  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="student.php" class="w3-bar-item w3-button" style="width:25% !important">Student</a>
      <a href="attandance.php" class="w3-bar-item w3-button" style="width:25% !important">Attandance</a>
      <a href="attandancereport.php" class="w3-bar-item w3-button" style="width:25% !important">Attandance Report</a>
    </div>
  </div>
  <center>
    <h3>Mark your attendance</h3>
    <label for="student">Student</label>
    <input type="text" name="student" id="student"><br>
    <label for="course">Course:</label>
    <select name="course" id="course">
      <option value="BBS">BBS</option>
      <option value="BCA">BCA</option>
      <option value="BBM">BBM</option>
      <option value="BIT">BIT</option>
    </select>
    <br>
    <br>
    <button class="btn mark-present ">Mark Your Attendance</button>
  </center>
  </body>

</html>
<!-- Header/Home -->



</body>

</html>