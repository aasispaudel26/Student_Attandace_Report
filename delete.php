<?php
include 'connection.php';

if (isset($_GET['id'])) {
  $userid = $_GET['id'];

  // Delete the user record from the database
  $query = "DELETE FROM users WHERE userid = ?";
  $params = array(&$userid);
  $stmt = sqlsrv_query($conn, $query, $params);

  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  // Redirect back to student.php after successful deletion
  header("Location: student.php");
  exit();
}
