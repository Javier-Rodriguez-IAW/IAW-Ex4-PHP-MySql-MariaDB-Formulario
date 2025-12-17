<?php include ("cabecera.html"); ?>

<?php

session_start();

if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:login.php");

}

?>

<ol>

    <li><a href="data_count.php">Count the records in the table (connect, select, disconnect)</a></li>
    <li><a href="data_select_all.php">Display all data (connect, select, disconnect)</a></li>
    <li><a href="data_select_where.php">Display the data whose lastName is Doe (connect, select where, disconnect)</a></li>
    <li><a href="data_select_orderby.php">Display the data ordered by lastName (connect, select orderby, disconnect)</a></li>
    <li><a href="data_select_where_orderby_html_table.php">Display filtered and sorted data in an HTML table (connect, select where orderby, disconnect)</a></li>
    <li><a href="data_delete.php">Delete user id=3 (connect, delete, disconnect)</a></li>
    <li><a href="data_update.php">Update the lastname of user id=2 (connect, update, disconnect)</a></li>

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