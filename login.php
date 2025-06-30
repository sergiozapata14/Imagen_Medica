<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/fd040e8c39.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['autentificacion']))
    {
    $usuarioNombre = $_SESSION['nombre'];
    $correo = $_SESSION['correo'];
    $youtube = $_SESSION['youtube'];
    $instagram = $_SESSION['instagram'];
    $tiktok = $_SESSION['tiktok'];
    $calendario = $_SESSION['calendario'];
    $estudio_de_mercado = $_SESSION['estudio_de_mercado'];
    $reels = $_SESSION['reels'];
    $reportes = $_SESSION['reportes'];;
    $findoctor = 'https://calendly.com/findoctormexico/20min?back=1&month=2024-07';
    $marketing = 'https://calendly.com/findoctormexico/agencia-de-marketing-medico?back=1&month=2024-07';
    $diseño = 'https://docs.google.com/forms/d/e/1FAIpQLSe7JEKEnaNW8X023TSc6NMdMb4McyAQojY94ay9vJO4wwArfg/viewform';
    }
    else{
        
        header('location: index.php'); // Si no esta autenticado mandar a login
    }

    if(isset($_POST['btncerrar'])) // Terminar Session;
    {
        session_destroy();
        header('location: index.php');
    }
    ?>

    <!--Empezar con diseño HTML-->
    <div class="container">
    <h1>Bienvenido <?php echo $usuarioNombre ?></h1>
    <div class="section">
        
        <div class="efecto_letra">
            <a href="<?php echo $calendario; ?>" class="efecto">
            <i class="fa-regular fa-calendar-days tamaño"></i> 
            <br>Calendario
            </a>
        </div>
     
        <div class="efecto_letra">
            <a href=" <?php echo $estudio_de_mercado ?>" class="efecto">
            <i class="fa-solid fa-chart-simple tamaño"></i>
            <br>Estudio de mercado
            </a>
        </div>

        <div class="efecto_letra">
            <a href="<?php echo $reels ?>" class="efecto">
            <i class="fa-solid fa-file-video tamaño"></i>
            <br>Reels
            </a>
        </div>
        </div>
    <div class="section">
        <div class="efecto_letra">
            <a href="<?php echo $reportes ?> " class="efecto">
                <br>
            <i class="fa-solid fa-gears tamaño"></i>
            <br><br>Reportes
            </a>
        </div>
        <div class="efecto_letra">
            <a href="<?php echo  $findoctor ?> " class="efecto">
                <br>
            <i class="fa-solid fa-book tamaño"></i>
            <br><br>Agendar Reunión
            </a>
        </div>
         <!--<div>
            <div class="mb-2 efecto_letra">
                <div class="dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-book tamaño"></i>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item ">¿Con quién desea agendar la reunión?</a></li>
                    <li><a class="dropdown-item" href="">Agendar Producción</a></li>
                    <li><a class="dropdown-item" href="">agendar reunión personalizada</a></li>
                </ul>
                <br>
                <span class="efecto">Agendar reunión o Producción </span>
            </div>
        </div>-->
        <div class="efecto_letra">
            <div class="mb-3 ">
                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-sheet-plastic tamaño"></i>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item">¿Qué tipo de queja o sugerencia desea realizar?</a></li>
                    <li><a class="dropdown-item" href="<?php echo $diseño ?>">Re-diseño</a></li>
                    <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSfwxU1iu5rm59ZUwfN7QOZ69o10lKIvnLOxZjmR6R__3JekLQ/viewform?usp=sf_link">Retroalimentación</a></li>
                    <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSchg5NiVh8RpgTPtIT6S_E0E1OqRFKuSaUId4R8d25nU6SuaQ/viewform">Cancelación Redes Sociales</a></li>
                </ul>
                <br>
                <span class="efecto">Quejas y sugerencias</span>
            </div>
        </div>
    </div>
    <div class="whatsApp" >
        <a href="https://api.whatsapp.com/send?phone=522213494512">
            <i class="fa-brands fa-whatsapp tamaño"></i>
        </a>
    </div>

    <form method="post">
        <input type="submit" value="cerrar sesion" name="btncerrar"/>
    </form>
  
    <!--<div class="footer">
        <h1>Tu correo es  !!!!! <?php echo "$correo" ?></h1>
        <h1>Tu Canal de youtube es : !!!!! <?php echo "$youtube " ?></h1>
        <h1>Tu Canal de instagram es: <?php  echo "$instagram " ?></h1>
        <h1>Tu Canal de TikTok es:  !!!!! <?php echo " $tiktok" ?></h1>
    </div>-->
    </div>
</body>
</html>