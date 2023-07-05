<?php
include 'connection.php';

// Check if the form is submitted and the update button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
  $userid = $_POST['userid'];
  $FirstName = $_POST['FirstName'];
  $MidName = $_POST['MidName'];
  $LastName = $_POST['LastName'];
  $country = $_POST['country'];
  $Province = $_POST['Province'];
  $District = $_POST['District'];
  $Email = $_POST['Email'];
  $age = $_POST['age'];
  $IsStudent = $_POST['IsStudent'];
  // Update other fields as needed

  $query = "UPDATE users SET FirstName = ?, MidName = ?, LastName = ?, country = ?, Province = ?, District = ?, Email = ?, age=?, IsStudent = ? WHERE userid = ?";
  $params = array(&$FirstName, &$MidName, &$LastName, &$Country, &$Province, &$District, &$Email, &$age, &$IsStudent, &$userid);
  $stmt = sqlsrv_query($conn, $query, $params);

  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  // Redirect back to student.php after successful update
  header("Location: student.php");
  exit();
}

// Retrieve the user data for pre-filling the form
if (isset($_GET['id'])) {
  $userid = $_GET['id'];

  $query = "SELECT * FROM users WHERE userid = ?";
  $params = array(&$userid);
  $stmt = sqlsrv_query($conn, $query, $params);

  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

  // Check if a user with the given ID exists
  if (!$row) {
    die("User not found.");
  }

  $FirstName = isset($row['FirstName']) ? $row['FirstName'] : '';
  $MidName = isset($row['MidName']) ? $row['MidName'] : '';
  $LastName =  isset($row['LastName']) ? $row['LastName'] : '';
  $country =  isset($row['country']) ? $row['country'] : '';
  $Province =  isset($row['Province']) ? $row['Province'] : '';
  $District =  isset($row['District']) ? $row['District'] : '';
  $Email =  isset($row['Email']) ? $row['Email'] : '';
  $age =  isset($row['age']) ? $row['age'] : '';
  $IsStudent =   isset($row['IsStudent']) ? $row['IsStudent'] : '';
}

?>

<!-- HTML form for updating user data -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
</head>

<body>
  <h1>Update User</h1>
  <form action="update.php" method="POST">
    <input type="hidden" name="userid" value="<?php echo $userid; ?>">
    <label for="FirstName">First Name</label>
    <input type="text" name="FirstName" id="FirstName" value="<?php echo $FirstName; ?>" required>
    <label for="MidName">Mid Name</label>
    <input type="text" name="MidName" id="MidName" value="<?php echo $MidName; ?>">
    <label for="LastName">Last Name</label>
    <input type="text" name="LastName" id="LastName" value="<?php echo $LastName; ?>" required>
    <label for="country">country</label>
    <input type="text" name="country" id="country" value="<?php echo $country; ?>" required>
    <label for="Province">Province</label>
    <input type="text" name="Province" id="Province" value="<?php echo $Province; ?>" required>
    <label for="District">District</label>
    <input type="text" name="District" id="District" value="<?php echo $District; ?>" required>
    <label for="Email">Email</label>
    <input type="text" name="Email" id="Email" value="<?php echo $Email; ?>" required>
    <label for="age">Age</label>
    <input type="text" name="age" id="age" value="<?php echo $age; ?>" required>
    <label for="IsStudent">IsStudent</label>
    <input type="text" name="IsStudent" id="IsStudent" value="<?php echo $IsStudent; ?>" required>

    <button type="submit" name="update">Update</button>
  </form>
</body>

</html>