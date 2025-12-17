<?php include ("cabecera.html"); ?>

<?php

session_start();

if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:login.php");

}

?>

<ol>

    <li><a href="db_create.php">Create the database (connect, create, disconnect)</a></li>
    <li><a href="db_drop.php">Delete the database (connect, delete, disconnect)</a></li>

    <br/>

    <form action="comprobarlogin.php" method="post">
 
    <label>Do you want to log out?</label>

    <br/>

    <input type="submit" name="valor" value="Si"/>
    <input type="submit" name="valor" value="No"/>

</form>

</ol>
</body>
</html>