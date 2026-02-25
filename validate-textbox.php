<!DOCTYPE html>
<html>

<body>

  <?php
  $error = "";
  $name = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $error = "Name is required!";
    } else {
      $name = $_POST["name"];
    }
  }
  ?>

  <form method="post">
    Enter Name: <input type="text" name="name">
    <span style="color:red;"><?php echo $error; ?></span>
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  if (!empty($name)) {
    echo "<h3>Welcome, $name!</h3>";
  }
  ?>

</body>

</html>