<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web de Información e Interactiva para la Familia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Página Web de Información e Interactiva para la Familia</h1>
        <nav>
            <ul>
              
                <li><a href="#registro">Registro</a></li> 
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Bienvenidos</h2>
            <p>AQUI ENCONTRARA EL FORMULARIO DE REGISTRO DE NUESTRA PAGINA WEB</p>
        </section>

        <section id="registro">
            <form method="post" autocomplete="off">
                <h2>Registro</h2>
                <div class="input-group">
                    <div class="input-container">
                        <input type="text" name="name" placeholder="Nombre">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" placeholder="Correo">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" placeholder="Teléfono">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" placeholder="Contraseña">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
                <a href="#">Términos y Condiciones</a>
                <input class="btn" type="submit" name="send" value="Enviar">
            </form>
        </section>
    </main>

<?php

include("snd/send.php")

?>

</body>
</html>