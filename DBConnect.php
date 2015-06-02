<?php
$con=mysqli_connect(mysql.serversfree.com,u515266549_kp,kavish,u515266549_food);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO Authentication (UserName, Password)
VALUES ('Peter', 'Pan')");

mysqli_close($con);
?>