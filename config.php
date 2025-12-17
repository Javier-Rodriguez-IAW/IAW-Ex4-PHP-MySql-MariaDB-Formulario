<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php

$servername = "localhost";
$username = "jrr";
$password = "jrr";
$dbname = "bd_w3_jrr3";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


try {
    $db_selected = mysqli_select_db($conn, $dbname);

    if (!$db_selected) {

    }
} catch (Exception $e) {
}

?>