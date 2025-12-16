<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Lastname Filtere:</h1>

   <form action="lastnameconsultation.php" method="post">

    <br/>

    <label>Insert lastname to filter:</label>
    <input type="text" name="lastname" required/>

    <br/>

    <p><input type="submit" value="Enviar"></p>

<?php include("./footer.html"); ?>