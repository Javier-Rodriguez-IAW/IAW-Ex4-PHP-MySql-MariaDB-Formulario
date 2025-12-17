<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Insert data</h1>

   <form action="insertDataCheck.php" method="post">

    <br/>

    <label>Insert firstname:</label>
    <input type="text" name="firstname" required/>
    
    <br/>

    <label>Insert lastname:</label>
    <input type="text" name="lastname" required/>
    
    <br/>
 
    <label>Insert email:</label>
    <input type="email" name="email" required/>
    
    <br/>

    <label>Insert user code:</label>
    <input type="text" name="usercode" pattern="^u[0-9]{5}$" required/>
    
    <br/>

    <label>Insert telephone:</label>
    <input type="tel" name="phone" pattern="[0-9+\s-]{9,15}" required/>
    
    <br/>

    <p><input type="submit" value="Enviar"></p>

<br/>
<br/>
<a href='welcome.php'>Volver al inicio</a>

<?php include("./footer.html"); ?>