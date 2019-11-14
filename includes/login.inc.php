<?php

include 'dbh.inc.php';

if (isset($_POST['login_btn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `user` WHERE user_email = ? AND user_password = ?";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL Failed: ' . mysqli_error($conn));
  } else {
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      $type = $row['user_type'];

      if ($type === 'Student') {
        header("Location: ../profile/student.php");
      } elseif ($type === 'Mentor') {
        header("Location: ../profile/mentor.php");
      } elseif ($type === 'Company') {
        header("Location: ../profile/company.php");
      }
    }
  }
}