<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $course = $_POST['course'];

  $sql = "INSERT INTO students (name, age, course) VALUES ('$name', '$age', '$course')";

  if ($conn->query($sql)) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
  } else {
    echo "Error: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Student Form</title>
</head>

<body>

  <h2>Add Student</h2>

  <form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Course: <input type="text" name="course" required><br><br>
    <button type="submit" name="submit">Save</button>
  </form>

  <hr>

  <h2>Student List</h2>

  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Course</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM students");

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo 
        "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['age'] . "</td>
            <td>" . $row['course'] . "</td>
        </tr>";
      }
    }
    ?>
  </table>

</body>

</html>