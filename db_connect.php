<?php include("sesion.php"); ?>
<?php include ("cabecera.html"); ?>

<?php

$servername = "localhost";
$username = "jrr";
$password = "jrr";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

print "<br/>";
print "<br/>";
print "<a href='welcome.php'>Volver al inicio</a>";

?>