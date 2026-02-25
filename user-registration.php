<!DOCTYPE html>
<html>

<body>

  <h2>User Registration Form</h2>

  <form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Register">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($name) || empty($email) || empty($password)) {
      echo "<p style='color:red;'>All fields are required!</p>";
    } else {
      echo "<h3>Registration Successful!</h3>";
      echo "Name: " . $name . "<br>";
      echo "Email: " . $email . "<br>";
      echo "Password: " . $password;
    }
  }
  ?>

</body>

</html>