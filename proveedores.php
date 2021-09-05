<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/proveedores.css">
    <title>Document</title>
</head>
<body>
    <header><h1 class="titulo">Proveedores</h1></header>
    <main class="principal_proveedores">
        <aside>
            <!-- Formulario de registro de nuevo proveedor-->
            <form action="" class="form_proveedores">
                <h2>Registrar Proveedor</h2>
                <table class="tabla_registro">
                    <tr>
                        <td>Codigo</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="btn-buscar"></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="btn-buscar"></td>
                    </tr>
                    <tr>
                        <td>Tipo de Proveedor</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="btn-buscar"></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                    </tr>
                    <tr>
                        <td><input type="number" class="btn-buscar"></td>
                    </tr>
                </table>
                <input type="submit" value="Agregar" class="btn btn-edit mt-10">
            </form>
        </aside>
        <br>
    
        <!-- Tabla que se llena con el listado de proveedores-->
        <div class="div_proveedores">
            <!-- Boton para buscar en la lista -->
            <input type="search" name="" id="" class="btn-buscar"> <button class="btn-buscar btn-edit">Buscar</button>
            <table class="tabla_proveedores">
                <thead>
                    <tr>
                        <th class="small">Codigo</th>
                        <th>Nombre</th>
                        <th>Tipo de Proveedor</th>
                        <th class="small">Telefono</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#####</td>
                        <td>xxxxx</td>
                        <td>-----</td>
                        <td>00000</td>
                        <td><button class="btn btn-del">Eliminar</button> <button class="btn btn-edit">Editar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>