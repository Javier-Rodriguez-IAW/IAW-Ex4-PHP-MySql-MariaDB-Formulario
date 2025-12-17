<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");
include ("recoge.php");

$id = recoge("id");
$lastname = recoge("lastname");

if ($id == "" || $lastname == "") {
    header("Location: lastnameUpdate.php");
    exit();
}

$sql = "UPDATE MyGuests SET lastname='$lastname' WHERE id=$id";

if (!mysqli_query($conn, $sql)) {
    echo "Error updating record: " . mysqli_error($conn);
} elseif (mysqli_affected_rows($conn) == 0) {
    echo "Record doesn't exist or data is the same. Impossible to update it.";
} else {
    echo "Record updated successfully";
}

print "<br/>";
print "<br/>";
print "<a href='welcome.php'>Volver al inicio</a>";

mysqli_close($conn);

?>

<?php include("./footer.html"); ?>