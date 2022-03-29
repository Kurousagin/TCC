

<?php

include('../log/validar.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area usuario</title>
    <link rel="stylesheet" type="text/css" href="../css/user.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>



    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> trocar imagem
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">Olá, <?php echo $_SESSION['Login']; ?>.</br> Bem vindo à area de usuario</h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i>Localização:</li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefone:</li>
                    <li><i class="icono fas fa-briefcase"></i> Estuda em:</li>
                    
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Ubicacion.</li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento.</li>
                    <li><i class="icono fas fa-user-check"></i> Registro.</li>
                    <li><i class="icono fas fa-share-alt"></i> Redes sociales.</li>
                </ul>
            </div>
            <div class="logoutin">
                <a href="../log/logout.php" class="boton-redes ">Home</a>
                <a href="../log/logout.php" class="boton-redes ">Grupos</a>
                <a href="../log/logout.php" class="boton-redes ">premium</a>
                <a href="../log/logout.php" class="boton-redes ">editar</a>
                <a href="../log/logout.php" class="boton-redes ">sair</a>
            </div>
        </div>
    </section>
 
</body>

</html>