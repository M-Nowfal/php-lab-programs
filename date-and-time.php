<?php
// Refresh the page every 1 second
header("Refresh:1");
?>

<!DOCTYPE html>
<html>

<body>

  <h2>Date & Time</h2>

  <?php
  echo "Date: " . date("d-m-Y") . "<br>";
  echo "Time: " . date("h:i:s A");
  ?>

</body>

</html>