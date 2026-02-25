<?php
// Contact form handling
$messageSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $msg = $_POST["msg"];

  if (!empty($name) && !empty($msg)) {
    $messageSent = true;
  }
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html>

<body>

  <h1 style="text-align:center; color:darkblue;">
    Government Arts College, Coimbatore (GAC CBE)
  </h1>

  <!-- Navigation -->
  <div style="text-align:center; margin-bottom:20px;">
    <a href="?page=home">Home</a> |
    <a href="?page=about">About</a> |
    <a href="?page=courses">Courses</a> |
    <a href="?page=contact">Contact</a>
  </div>

  <hr>

  <?php
  // -------- HOME --------
  if ($page == 'home') {
    echo "
    <h2>Home</h2>
    <p>
        Welcome to Government Arts College, Coimbatore — a premier institution 
        offering quality higher education since 1852. The campus is known for 
        its academic excellence, vibrant atmosphere, and experienced faculty.
    </p>";
  }

  // -------- ABOUT --------
  if ($page == 'about') {
    echo "
    <h2>About GAC CBE</h2>
    <p>
        Government Arts College, Coimbatore is one of the oldest and most reputed
        institutions in Tamil Nadu. The college offers various undergraduate, postgraduate,
        and research programs across arts, science, and commerce streams.
    </p>
    <p>
        The mission of the college is to provide inclusive and high-quality education
        while encouraging research, innovation, and overall student development.
    </p>";
  }

  // -------- COURSES --------
  if ($page == 'courses') {
    echo "
    <h2>Courses Offered</h2>
    <ul>
        <li>B.Sc. Computer Science</li>
        <li>B.Sc. Mathematics</li>
        <li>B.Com.</li>
        <li>B.A. English Literature</li>
        <li>M.Sc. Computer Science</li>
        <li>M.A. Economics</li>
        <li>Ph.D. Research Programs</li>
    </ul>";
  }

  // -------- CONTACT --------
  if ($page == 'contact') {
    echo "
    <h2>Contact Us</h2>
    <form method='post'>
        Your Name: <input type='text' name='name'><br><br>
        Message: <textarea name='msg'></textarea><br><br>
        <input type='submit' value='Send Message'>
    </form>
    ";

    if ($messageSent) {
      echo "<h3 style='color:green;'>Thank you, $name! Your message has been sent.</h3>";
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
      echo "<p style='color:red;'>All fields are required!</p>";
    }
  }
  ?>

  <hr>

  <p style="text-align:center; color:gray;">
    &copy; <?php echo date("Y"); ?> Government Arts College, Coimbatore - Demo PHP Website
  </p>

</body>

</html>