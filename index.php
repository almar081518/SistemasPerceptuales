<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas Perceptuales</title>
        <!-- Hojas de estilo -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- librerias para JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="stilo/style.css">
</head>
<body>

    <div class="header">
        <h1 class="header"></h1>
    </div>

    <div class="contenedor">
        <div class="flex-basis">
            <a href="#modalAuditivo" class="boton-principal azul" data-toggle="modal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ear" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M6 10a7 7 0 1 1 13 3.6a10 10 0 0 1 -2 2a8 8 0 0 0 -2 3a4.5 4.5 0 0 1 -6.8 1.4" />
                <path d="M10 10a3 3 0 1 1 5 2.2" />
                </svg>
                <h1>sistema auditivo</h1>
            </a>
        </div>
        <div class="flex-basis">
            <a href="#modalVisual" class="boton-principal rojo" data-toggle="modal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-video" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                <rect x="3" y="6" width="12" height="12" rx="2" />
                </svg>
                <h1>sistema visual</h1>
            </a>
        </div>
        
    </div>

    <?php include("html/modal_auditivo.php");?>
    <?php include("html/modal_visual.php");?>
    <script src="js/script.js"></script>
</body>
</html>