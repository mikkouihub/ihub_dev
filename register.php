<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REGISTER</title>
</head>
<body>
  <form action="includes/register.inc.php" method="POST">
    <select name="user_type" id="user_type" name="user_type">
      <option value="">Select User Type</option>
      <option value="Student">Student</option>
      <option value="Mentor">Mentor</option>
      <option value="Company">Company</option>
    </select>
    <input type="text" name="user_name" placeholder="Name">
    <input type="text" name="user_email" placeholder="Email">
    <input type="password" name="user_password" placeholder="Password">
    <input type="submit" name="register_btn" value="REGISTER">
  </form>
</body>
</html>