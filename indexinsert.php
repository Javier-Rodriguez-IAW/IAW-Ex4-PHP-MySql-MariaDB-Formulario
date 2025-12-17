<?php include ("cabecera.html"); ?>

<?php

session_start();

if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:login.php");

}

?>

<ol>

    <li><a href="data_insert_single.php">Insert data (single record) (connect, insert, disconnect)</a></li>
    <li><a href="data_insert_single_get_last_id.php">Insert data (single record) and Get last inserted ID (connect, insert, query last ID, disconnect)</a></li>
    <li><a href="data_insert_multiple_simple.php">Insert multiple data without preparation (connect, execute x3, disconnect)</a></li>
    <li><a href="data_insert_multiple_prepared.php">Insert multiple data (connect, prepare, execute x3, disconnect)</a></li>

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