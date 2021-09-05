<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inventario.css">
    <title>Inventario</title>
</head>
<body>
    <header class="title"><h1>Inventario</h1></header>
    <div class="agregar_elemento">
        <!-- Formulario para agregar nuevos articulos-->
        <form action="">
            <h2>Agregar Articulo</h2>
            <table>
                <tr>
                    <td>Codigo</td>
                    <td><input type="text" class="dato"></td>
                    <td>Nombre</td>
                    <td><input type="text" class="dato"></td>
                    <td>Proveedor</td>
                    <td><input type="text" class="dato"></td>
                    <tr>
                        <td colspan="6"><input type="submit" value="Agregar" class="boton1 dato"></td>
                    </tr>
                </tr>
            </table>
        </form>
    </div>

    <!-- Tabla que se llena con los productos del inventario-->
    
        <!-- Buscador de los articulos en la lista -->
        <input type="text" name="" id="" class="buscar" placeholder="Buscar Articulo">
        <table class="inventario">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Proveedor</th>
                <th>Opciones</th>
            </tr>
            <tr>
                <td>#####</td>
                <td>xxxxx</td>
                <td>-----</td>
                <td><button class="btn btn-edit">Editar</button> <button class="btn btn-del">Eliminar</button></td>
            </tr>
        </table>
    
</body>
</html>