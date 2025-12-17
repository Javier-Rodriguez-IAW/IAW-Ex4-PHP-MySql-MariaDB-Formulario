<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");

?>

<h1>Que tipo de consulta quieres realizar</h1>

   <form action="extraRedirect.php" method="post">

    <br>
    <input type="radio" name="valor" value="insert" /> <label>Insertar un dato a través de un formulario</label><br>
    <input type="radio" name="valor" value="lastname" /> <label>Visualizar los datos de aquellos que tengan el lastname con un valor pasado a través de un formulario</label><br>
    <input type="radio" name="valor" value="order" /> <label>Vsualizar todos los datos ordenados ascendente o descendentemente con un valor pasado a través de un formulario</label><br>
    <input type="radio" name="valor" value="delete" /> <label>Borrar un usuario cuyo id será pasado por formulario</label><br>
    <input type="radio" name="valor" value="update" /> <label>Actualizar el lastname de un usuario cuyo id ha sido pasado por formulario</label><br>


    <p><input type="submit" value="Enviar"></p>

    <a href='welcome.php'>Volver al inicio</a>


<?php include("./footer.html"); ?>