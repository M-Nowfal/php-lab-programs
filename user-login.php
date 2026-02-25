<!DOCTYPE html>
<html>

<body>

  <h2>User Login</h2>

  <form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
  </form>

  <?php
  $correctUsername = "admin";
  $correctPassword = "1234";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $correctUsername && $password == $correctPassword) {
      echo "<h3 style='color:green;'>Login Successful!</h3>";
    } else {
      echo "<h3 style='color:red;'>Invalid username or password!</h3>";
    }
  }

  ?>

</body>

</html>