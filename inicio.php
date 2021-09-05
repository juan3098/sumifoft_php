<?php 
    session_start();
    if(isset($_SESSION["admin"]))
    {
        $sesion= $_SESSION["admin"];  
        $cargo = "Admin";
    }
    if ($sesion== null || $sesion== "") 
    {
        header("location: index");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="js/acciones.js"></script>
    <title>Home</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <header class="cabecera">
        
        <h1 class="">Control de inventario</h1>
        <nav>
            <a href="#">Perfil - <?php echo $cargo; ?> </a>
            <a href="php/logout">Cerrar Sesion</a>
        </nav>

    </header>

    <!-- Menu de opciones lateral -->
    <main class="principal">
        <nav class="panel">
            <ul>
                <li> 
                    <img src="img/client.svg" class="list">
                        <a href="clientes">Clientes</a>
                </li>
                <li> 
                    <img src="img/items.svg" class="list">
                    <a href="inventario">Inventario</a>
                </li>
                <li> 
                    <img src="img/supplier.svg" class="list">
                    <a href="proveedores">Proveedores</a>
                </li>
                <li> 
                    <img src="img/solicitud.svg" class="list">
                    <a href="solicitar" >Solicitar</a>
                </li>
                <li> 
                    <img src="img/solicitudes.svg" class="list">
                    <a href="solicitudes">Solicitudes</a>
                </li>
            </ul>
        </nav>
    
        <!-- Contenedor que se llenara un vez se le de click a las opciones de la lista-->
        <div class="container" id="contenedor_principal">
            <img src="img/inventory.svg" alt="" class="image">
        </div>
    </main>
</body>
</html>