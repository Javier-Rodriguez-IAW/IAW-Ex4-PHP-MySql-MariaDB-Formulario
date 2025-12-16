<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Order visualizer</h1>

<form action="orderconsultation.php" method="post">

    <label><strong>Select sort field:</strong></label><br/>
    
    <input type="radio" id="fname" name="field" value="firstname" checked required>
    <label for="fname">Firstname</label><br>

    <input type="radio" id="lname" name="field" value="lastname">
    <label for="lname">Lastname</label><br>

    <input type="radio" id="phone" name="field" value="phone">
    <label for="phone">Phone</label><br>

    <input type="radio" id="ucode" name="field" value="user_code">
    <label for="ucode">User Code</label><br>

    <br/>

    <label><strong>ASC OR DESC ORDER:</strong></label><br/>

    <input type="radio" id="asc" name="order" value="ASC" checked required>
    <label for="asc">Ascending (A-Z)</label><br>

    <input type="radio" id="desc" name="order" value="DESC">
    <label for="desc">Descending (Z-A)</label><br>

    <br/>
    <p><input type="submit" value="Send"></p>

</form>

<?php include("./footer.html"); ?>