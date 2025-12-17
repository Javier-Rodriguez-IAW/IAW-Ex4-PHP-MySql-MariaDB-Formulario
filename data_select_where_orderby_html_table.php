<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">DATA</h2>

    <?php
    // Lanzamos la consulta con los nombres de columna correctos de tu tabla MyGuests
    $sql = "SELECT id, firstname, lastname, phone, user_code FROM MyGuests ORDER BY lastname";
    $result = mysqli_query($conn, $sql);

    if ($result == false) {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    } 
    elseif (mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Abrimos la tabla con clases de Bootstrap para que se vea bien
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-hover table-bordered shadow-sm'>";
        
        // CORRECCIÓN: Definimos las 5 columnas en el encabezado
        echo "<thead class='table-dark'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Código</th>
                </tr>
              </thead>";
        
        echo "<tbody>";

        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["firstname"] . "</td>";
            echo "<td>" . $row["lastname"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["user_code"] . "</td>";
            echo "</tr>";
        }

        echo "</tbody></table></div>";

    } else {
        echo "<div class='alert alert-warning'>0 resultados encontrados.</div>";
    }

    mysqli_close($conn);
    ?>

    <div class="mt-4">
        <a href="welcome.php" class="btn btn-primary">
            <i class="bi bi-house-door"></i> Volver al inicio
        </a>
    </div>
</div>

<?php include("footer.html"); ?>