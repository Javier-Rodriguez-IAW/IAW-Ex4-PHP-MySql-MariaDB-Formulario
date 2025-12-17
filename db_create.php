<?php include("sesion.php"); ?>

<?php
$servername = "localhost";
$username = "jrr";
$password = "jrr";
$dbname = "bd_w3_jrr3";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)==false) {
   echo "Error creating database: " . mysqli_error($conn);
} else {
  echo "Database created successfully";
}

print "<br/>";
print "<br/>";
print "<a href='index.php'>Volver al inicio</a>";

mysqli_close($conn);
?> 
