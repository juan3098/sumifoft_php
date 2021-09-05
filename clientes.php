<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/clientes.css">
    <title>Clientes</title>
</head>
<body>
    <header>
        <h1 class="titulo">Clientes</h1>
    </header>
    <main class="principal_clientes">
        <aside>
            <!-- Formulario de registro de nuevos clientes-->
            <form action="" class="form_clientes">
                <h2>Registrar un Cliente</h2>
                <table class="table_registro">
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
                        <td>Direccion</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="btn-buscar"></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="btn-buscar"></td>
                    </tr>
                </table>
                <input type="submit" value="Agregar" class="btn btn-edit mt-10">
            </form>
        </aside>
        <!-- Tabla que se llena con el listado de clientes-->
        <!-- Boton para buscar en la lista -->
        <div class="div_clientes">
            <input type="search" name="" id="" class="btn-buscar"> <button class="btn-buscar btn-edit">Buscar Cliente</button>
            <table class="table_clientes">
                <thead>
                    <tr>
                        <th class="small">Codigo</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th class="small">Telefono</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>###</td>
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