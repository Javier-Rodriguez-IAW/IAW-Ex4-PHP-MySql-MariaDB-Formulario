<?php include ("cabecera.html"); ?>

<?php

session_start();

if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:login.php");

}

?>

<ol>

    <li><a href="table_create_guests.php">Create table myGuests (connect, create, disconnect)</a></li>
    <li><a href="table_check_exists.php">Check the existence of the myGuests table (connect, query, disconnect)</a></li>
    <li><a href="table_drop.php">Delete table myGuests (connect, delete, disconnect)</a></li>

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