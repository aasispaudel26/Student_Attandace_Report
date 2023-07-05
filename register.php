<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $FirstName = $_POST['FirstName'];
  $MidName = $_POST['MidName'];
  $LastName = $_POST['LastName'];
  $Country = $_POST['Country'];
  $Province = $_POST['Province'];
  $District = $_POST['District'];
  $Email = $_POST['Email'];
  $age = $_POST['age'];
  $IsStudent = $_POST['IsStudent'];

  $query = "EXEC sp_insert_users '$FirstName','$MidName','$LastName','$Country','$Province','$District','$Email','$age','$IsStudent'";
  echo $query;
  $query1 = "INSERT INTO users 
      (FirstName,
       MidName,
        LastName,
        Country,
        Province,
        District,
        Email,
        age,
        IsStudent
      ) VALUES (
          ?,
          ?, 
          ?,
          ?, 
          ?, 
          ?,
          ?, 
          ?,
          ?
           )";



  // $params = array(&$FirstName, &$MidName, &$LastName, &$Country, &$Province, &$District, &$Email, &$age, &$IsStudent);

  // $stmt = sqlsrv_prepare($conn, $query, $params);
  $stmt = sqlsrv_prepare($conn, $query);
  echo $stmt;

  if ($stmt) {
    echo "hello";
  }

  // Execute the statement
  if (sqlsrv_execute($stmt) === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  echo "Data inserted successfully";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: darkcyan;
    }
  </style>
</head>

<body>

  <h1>
    <center>Sign up</center>
  </h1>

  <form action="register.php " method="POST">
    <center><label for="FirstName">FirstName</label><br>
      <input type="text" name="FirstName" id="FirstName" required><br>

      <br>
      <label for="MidName">MidName</label><br>
      <input type="MidName" name="MidName" id="MidName">

      <br><br>

      <label for="LastName">LastName</label><br>
      <input type="LastName" name="LastName" id="LastName" required>
      <br> <br>

      <label for="Country">Country</label><br>
      <select name="Country" id="Country">
        <option value="">select country</option>
        <option value="Nepal">Nepal</option>
        <option value="USA">USA</option>
        <option value="France">France</option>
        <option value="India">India</option>
        <option value="japan">japan</option>
        <option value="dubai">dubai</option>
        <option value="spain">spain</option>
      </select>
      <br><br>

      <label for="Province">Province</label><br>
      <select name="Province" id="province">
        <option value="">Select province</option>
        <option value="Province 1">Province 1</option>
        <option value="Province 2">Province 2</option>
        <option value="Province 3">Province 3</option>
        <option value="Province 4">Province 4</option>
        <option value="Province 5">Province 5</option>
        <option value="Province 6">Province 6</option>
        <option value="Province 7">Province 7</option>
      </select>
      <br><br>
      <label for="District">District</label><br>
      <select name="District" id="District">
        <option value="Select District">Select District</option>
        <option value="Ramechhap">Ramechhap</option>
        <option value="Sinduli">sinduli</option>
        <option value="Dolakha">dolakha</option>
        <option value="Kathmandu">kathmandu</option>
        <option value="Bhaktapur">Bhaktapur</option>
        <option value="Lalitpur">Lalitpur</option>
      </select>
      <br><br>

      <label for="Email">Email</label><br>
      <input type="Email" name="Email" id="">
      <br><br>

      <label for="">age</label><br>
      <input type="age" name="age" id="">
      <br><br>


      <label for="IsStudent">IsStudent?</label><br><br>

      <label for="isStudent">Yes</label>
      <input type="radio" id="IsStudent" name="IsStudent" value="yes">

      <label for="IsStudent">No</label>
      <input type="radio" id="IsStudent" name="IsStudent" value="no"><br><br>

      <center>
        <input type="submit" name="save" value="register">
        <br><br>

      </center>


  </form>
</body>

</html>