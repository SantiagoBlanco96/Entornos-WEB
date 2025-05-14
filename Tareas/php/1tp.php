<?php
$nombre     = "Mi Empresa S.A.";
$descripcion= "Empresa líder en soluciones tecnológicas para la industria.";
$direccion  = "Av. Siempre Viva 742";
$localidad  = "Springfield";
$cp         = "1000";
$pais       = "Argentina";
$telefono   = "+54 11 1234-5678";
$correo     = "contacto@miempresa.com";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Empresa</title>
</head>
<body>
    <!-- Título de la empresa -->
    <h1><?php echo$nombre?></h1>

    <!-- Descripción -->
    <div >
        <span class="label">Descripción:</span>
        <span><?php echo$descripcion ?></span>
    </div>

    <!-- Dirección -->
    <div class="dato">
        <span class="label">Dirección:</span>
        <span>
            <?php echo$direccion ?>, 
            <?php echo$localidad ?>, 
            CP <?php echo$cp ?>, 
            <?php echo$pais ?>
        </span>
    </div>

    <!-- Teléfono -->
    <div class="dato">
        <span class="label">Teléfono:</span>
        <span><?php echo$telefono ?></span>
    </div>

    <!-- Correo -->
    <div class="dato">
        <span class="label">Correo:</span>
        <span>
            <a href="mailto:<?php echo$correo ?>" aria-label="Enviar correo a <?php echo$correo ?>">
            <?php echo$correo ?>
            </a>
        </span>
    </div>
</body>
</html>