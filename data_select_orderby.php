<?php include("sesion.php"); ?>

<?php

include("config.php");

//Lanzamos la consulta
$sql = "SELECT id, firstname, lastname, phone, user_code FROM MyGuests ORDER BY lastname";
$result = mysqli_query($conn, $sql);

if ($result==false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {

  // Convertir todo a un array asociativo
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Recorrer con foreach
  foreach ($rows as $row) {
  echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Phone: " . $row["phone"] . " - Code: " . $row["user_code"] . "<br>";
  }

} else {
  echo "0 results";
}

print "<br/>";
print "<br/>";
print "<a href='index.php'>Volver al inicio</a>";

mysqli_close($conn);
?>

<?php include("footer.html"); ?>