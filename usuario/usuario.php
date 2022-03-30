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
                        <a   href="" ></a> 
                    </button>
                </div>
                <button class="boton-portada" onclick="window.location.href = '#'">trocar imagem</button>
                    
                </button>
                <button  onclick="window.location.href = '#'" class="boton-por">
                    editar perfil
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">

            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $_SESSION['Login']; ?></h3>
              
            

           
                <ul class="lista-datos">
                    <li><a   href="" class="icono fas fa-map-signs"></a> Localização:</li>
                    <li><a   href="" class="icono fas fa-phone-alt"></a>  Telefone:</li>
                    <li><a   href="" class="icono fas fa-briefcase"></a>  Estuda em:</li>

                </ul>
                <ul class="lista-datos">
                    <li><a   href="" class="icono fas fa-map-marker-alt"></a>  Ubicacion.</li>
                    <li><a   href="" class="icono fas fa-calendar-alt"></a>  Fecha nacimiento.</li>
                    <li><a   href="" class="icono fas fa-user-check"></a>  Registro.</li>
                    <li><a   href="" class="icono fas fa-share-alt"></a>  Redes sociales.</li>
                </ul>
            </div>
            <a href="../index.php">sair</a>

          
            
    </section>

</body>

</html>