<?php 
    session_start();

    if( isset( $_SESSION["admin"] ) )
    {
        header("location: inicio");
    }
    $message_error = "";
    if( isset($_POST['submit']) ) 
    {
        include 'config/connection.php';

        $email = $_POST["email"];
        $clave = $_POST["password"];
        $encrypt = sha1($clave);
    
        $admin = $misqli->query("SELECT * FROM users WHERE email = '".$email."' AND password = '".$encrypt."' ");
        if(mysqli_num_rows($admin) > 0) 
        {
            session_start();
            
            $_SESSION['admin']="$email";
            header("location: inicio");
        } else{
            $message_error = "El usuario y/o la contraseña son incorrectos, por favor vuelva a introducirlos.";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Iniciar Sesion</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .btn:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
        <div class="fondo">
            <div class="sesion">
                <form action="" method="POST">
                    <h1>Iniciar Sesion</h1>
                    <input type="email" name="email" id="email" placeholder="Correo electronico Usuario" class="datos">
                    <input type="password" name="password" id="" placeholder="Contraseña" class="datos">
                    <button class="btn" type="submit" name="submit">
                        Ingresar
                    </button>
                </form>
            </div>
            <?php 
                if($message_error == ""){
                    ?>
                        <div style="text-align: center;">
                            <label class="text-danger">Bienvenido</label>
                        </div>
                    <?php
                }else
                {
                    ?>
                        <div class="alert alert-danger"> <?php echo $message_error ?></div>	
                    <?php
                }
            ?>
        </div>
    </main>
</body>
</html>