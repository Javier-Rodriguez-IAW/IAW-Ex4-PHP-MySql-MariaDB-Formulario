<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");

include ("recoge.php");

$field = recoge("field");
$order = recoge("order");

if ($field == "" || $order == "") {
    header("Location: order.php");
    exit();
}

$sql = "SELECT id, firstname, lastname, phone, user_code FROM MyGuests ORDER BY $field $order";
$result = mysqli_query($conn, $sql);

if ($result == false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo "<h2>Listado ordenado por " . $field . " (" . $order . ")</h2>";

  foreach ($rows as $row) {
    echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Phone: " . $row["phone"] . " - User Code: " . $row["user_code"] . "<br>";
  }

} else {
  echo "0 results";
}

print "<br/>";
print "<br/>";
print "<a href='index.php'>Volver al inicio</a>";

mysqli_close($conn);

?>

<?php include("./footer.html"); ?>