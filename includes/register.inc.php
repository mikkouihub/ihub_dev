<?php

include 'dbh.inc.php';

if (isset($_POST['register_btn'])) {
  $name = $_POST['user_name'];
  $email = $_POST['user_email'];
  $password = $_POST['user_password'];
  $type = $_POST['user_type'];

  $sql = "INSERT INTO `user` (`user_ID`, `user_name`, `user_email`, `user_password`, `user_type`) VALUES (NULL, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL Failed: ' . mysqli_error($conn));
  } else {
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $type);
    mysqli_stmt_execute($stmt);
  }
  header("Location: ../index.php");
}