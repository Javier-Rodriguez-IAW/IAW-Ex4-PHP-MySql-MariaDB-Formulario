<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("db_connect.php"); ?>

<h1>Delete user</h1>

<form action="idDelete.php" method="post">

    <label>Enter the ID of the user you want to delete</label>
    <br/>
    <input type="number" name="id" required>
    <br/>
    <p><input type="submit" value="Enviar"></p>

</form>

<?php include("./footer.html"); ?>