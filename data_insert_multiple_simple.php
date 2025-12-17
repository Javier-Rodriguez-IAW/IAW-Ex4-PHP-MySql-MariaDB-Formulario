<?php include("sesion.php"); ?>

<?php

include("config.php");

// Prepare the multiple query
$sql = "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('John', 'Doe', 'john@example.com', '123456789', 'a12345');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('Mary', 'Moe', 'mary@example.com', '987654321', 'a54321);";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('Julie', 'Dooley', 'julie@example.com', '1234567891', 'a67890')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

print "<br/>";
print "<br/>";
print "<a href='welcome.php'>Volver al inicio</a>";

mysqli_close($conn);

?> 

<?php include("footer.html"); ?>