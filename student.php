<?php
include 'connection.php';
$query = "SELECT * FROM users";
$result = sqlsrv_query($conn, $query);

if ($result === false) {
  die(print_r(sqlsrv_errors(), true));
}

echo "<table >";
echo "<tr>";
echo "<th>FirstName</th>";
echo "<th>MidName</th>";
echo "<th>LastName</th>";
echo "<th>country</th>";
echo "<th>Province</th>";
echo "<th>District</th>";
echo "<th>email</th>";
echo "<th>age</th>";
echo "<th>IsStudent</th>";
echo "</tr>";
// while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
//     echo "<tr>";
//     echo "<td>".$row['FirstName']."</td>";
//     echo "<t >".$row['MidName']."</t>";
//     echo "<td>".$row['LastName']."</td>";
//     echo "<td>".$row['country']."</td>";
//     echo "<td>".$row['Province']."</td>";
//     echo "<t>".$row['District']."</t>";
//     echo "<td>".$row['Email']."</td>";
//     echo "<t>".$row['age']."</t>";
//     echo "<t>".$row['IsStudent']."</t>";

//     echo "</tr>";
// }

// echo "</table>";

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
  <link rel="stylesheet" href="style.css">

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

    table {
      margin: 0 auto;
      border-collapse: collapse;
      width: 400px;
      background-color: #f2f2f2;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4caf50;
      color: white;
    }

  }
</style>
<bodyclass="w3-dark-gray">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <p>Home</p>
      <a href="student.php" class="w3-bar-item w3-button w3-padding-large w3-black">
        <p>Student</p>
      </a>
      <a href="attandance.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <p>Attandance</p>


  </nav>>



  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-black">
        <p>Home</p>
        <a href="student.php" class="w3-bar-item w3-button" style="width:25% !important">Student</a>
        <a href="attandance.php" class="w3-bar-item w3-button" style="width:25% !important">Attandance</a>
        <a href="attandancereport.php" class="w3-bar-item w3-button" style="width:25% !important">Attandance Report</a>
    </div>
  </div>
  <div class="register-link">
    <a href="register.php">Register</a>
  </div>

  <?php
  while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td >" . $row['MidName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['country'] . "</td>";
    echo "<td>" . $row['Province'] . "</td>";
    echo "<td>" . $row['District'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['IsStudent'] . "</td>";
    echo "<td><a href='update.php?id=" . $row['userid'] . "'>Update</a></td>";
    echo "<td><a href='delete.php?id=" . $row['userid'] . "'>Delete</a></td>";

    echo "</tr>";
  }

  echo "</table>";

  ?>

  </body>

</html>