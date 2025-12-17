<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php include("config.php"); ?>

<h1>Update user lastname</h1>

<form action="lastnameUpdateConsultation.php" method="post">

    <label>User ID to modify:</label>

    <br/>

    <input type="number" name="id" required/>

    <br/>

    <label>New Lastname:</label>

    <br/>

    <input type="text" name="lastname" required/>
    
    <br/>

    <p><input type="submit" value="Enviar"></p>

</form>

<br/>
<br/>
<a href='welcome.php'>Volver al inicio</a>

<?php include("./footer.html"); ?>