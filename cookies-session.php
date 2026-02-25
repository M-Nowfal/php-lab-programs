<?php
// If user submits name, set cookie
if (isset($_POST["setcookie"])) {
  $username = $_POST["username"];
  setcookie("user", $username, time() + 3600); // 1 hour
}

// Clear cookie
if (isset($_POST["clearcookie"])) {
  setcookie("user", "", time() - 3600); // expired cookie
}
?>

<!DOCTYPE html>
<html>

<body>

  <h2>Cookie Demo</h2>

  <!-- Show cookie if available -->
  <?php
  if (isset($_COOKIE["user"])) {
    echo "<h3>Welcome back, " . $_COOKIE["user"] . "!</h3>";
  } else {
    echo "<h3>No cookie found. Please enter your name.</h3>";

    echo '<form method="post">
      Enter Your Name:
      <input type="text" name="username">
      <button type="submit" name="setcookie">Set Cookie</button>
    </form>';
  }
  ?>

  <br>

  <!-- Form to clear cookie -->
  <form method="post">
    <button type="submit" name="clearcookie">Clear Cookie</button>
  </form>

</body>

</html>