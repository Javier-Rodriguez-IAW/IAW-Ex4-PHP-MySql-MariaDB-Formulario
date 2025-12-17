<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

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


// Create database
$sql = "CREATE DATABASE bd_w3_jrr3";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php include("./footer.html"); ?>