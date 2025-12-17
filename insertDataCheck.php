<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("config.php");
include ("recoge.php");


$firstname = recoge("firstname");
$lastname = recoge("lastname");
$email = recoge("email");
$usercode = recoge("usercode");
$phone = recoge("phone");

if ($firstname == "" || $lastname == "" || $email == "" || $usercode == "" || $phone == "") {
    header("Location: insertData.php");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: insertData.php");
}

if (!preg_match("/^u[0-9]{5}$/", $usercode)) {
    header("Location: insertData.php");
}

if (strlen($phone) > 15) {
    header("Location: insertData.php");
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('$firstname', '$lastname', '$email', '$phone', '$usercode')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else {
    echo "New record created successfully";
}

print "<br/>";
print "<br/>";
print "<a href='welcome.php'>Volver al inicio</a>";

mysqli_close($conn);
?>

<?php include("./footer.html"); ?>