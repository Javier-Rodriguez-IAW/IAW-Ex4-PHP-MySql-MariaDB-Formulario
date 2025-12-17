<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");
include("recoge.php");

$id = recoge("id");

if ($id == "") {
    header("Location: id.php");
    exit();
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=$id";

if (!mysqli_query($conn, $sql)) {
    echo "Error deleting record: " . mysqli_error($conn);
} elseif (mysqli_affected_rows($conn)==0){ //Ese id no existe

    echo "Record doesn't exist. Impossible to delete it.";}
else{
    echo "Record deleted successfully";
}

print "<br/>";
print "<br/>";
print "<a href='welcome.php'>Volver al inicio</a>";

mysqli_close($conn);

?> 

<?php include("footer.html"); ?>