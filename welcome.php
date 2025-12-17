<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column; /* Apila elementos verticalmente */
            font-family: sans-serif;
            background-color: #f8f9fa;
        }
        .main-content {
            flex-grow: 1;      /* Ocupa todo el espacio restante */
            display: flex;
            justify-content: center; /* Centra horizontalmente el cuadro */
            align-items: center;     /* Centra verticalmente el cuadro */
        }
        .contenedor-bienvenida {
            text-align: center;
            max-width: 500px;
            width: 90%;
            padding: 30px;
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .aviso-superior {
            border-bottom: 3px solid #198754;
            padding-bottom: 15px;
            margin-bottom: 20px;
            color: #198754;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="main-content">
        <div class="contenedor-bienvenida">
            <div class="aviso-superior">
                ⬆️ USA EL MENÚ SUPERIOR PARA NAVEGAR ⬆️
            </div>
            <h1 class="display-6">Bienvenido</h1>
            <p class="text-muted">Usa los menús de arriba para navegar por las distintas opciones</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>