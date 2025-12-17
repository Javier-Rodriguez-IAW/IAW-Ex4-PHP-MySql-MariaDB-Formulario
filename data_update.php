<?php include("sesion.php"); ?>

<?php

include("config.php");

$sql = "UPDATE MyGuests SET lastname='Smith' WHERE id=2";

if (!mysqli_query($conn, $sql)) {
  echo "Error updating record: " . mysqli_error($conn);
}elseif (mysqli_affected_rows($conn)==0){ //Ese id no existe

    echo "Record doesn't exist. Impossible to update it.";} else {
  echo "Record updated successfully";
}

print "<br/>";
print "<br/>";
print "<a href='welcome.php'>Volver al inicio</a>";

mysqli_close($conn);

?>

<?php include("footer.html"); ?>