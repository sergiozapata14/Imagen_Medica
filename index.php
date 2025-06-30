<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen Médica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/fd040e8c39.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="promocionesCarrucel">
            <div id="carouselExampleDark1" class="carousel carousel-dark1 slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                        <img src="Promo/Mesa de trabajo 3-100.jpg" class="d-block w-55  imgTamanoPromo" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                        <img src="Promo/Mesa de trabajo 1-100.jpg" class="d-block w-55 imgTamanoPromo" alt="...">
                        
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="Promo/Mesa de trabajo 2-100.jpg" class="d-block w-55 imgTamanoPromo" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
    </header>
    <main>
        <section id="inicio">
            <div class="contenedor">
                <div class="formulario">
                    <form action="control.php" method="post">
                        <h2>Iniciar sesión</h2>
                        <div class="input-contenedor">
                            <input type="text" required name="usuario" id="usuario">
                            <label for="usuario">Usuario</label>
                        </div>
                        <div class="input-contenedor">
                            <input type="password" required name="password" id="password">
                            <label for="password">Contraseña</label>
                        </div>
                        <div id ="incorrecto">
                        </div>
                        <div>
                            <button class="buttonLogin" type="submit">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
                <div class="float-end" >
                    <a href="https://api.whatsapp.com/send?phone=522213494512"><i class="fa-brands fa-whatsapp tamaño"></i></a>
                </div>
        </section>
    </main>
    <div class="informacionCarrucel">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="11" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="12" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="13" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="14" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="15" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="16" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="17" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="18" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="19" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="20" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="21" aria-label="Slide 3"></button>
                <!--<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="22" aria-label="Slide 3"></button>-->
                

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2500">
                <img src="img/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                <img src="img/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img8.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img12.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img13.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img14.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img15.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img16.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img17.jpg" class="d-block w-100" alt="...">
                </div>
                <!--<div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img18.jpg" class="d-block w-100" alt="...">
                </div>-->

                <div class="carousel-item" data-bs-interval="2500">
                    <img src="img/img19.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                <a><h1>Recomendaciónes:</h1> Facial Clinica "Clínica de Rinología Facial" </a>
                    <div class="video-container">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yTMDEQlQAbU?si=wSRniGkBtThdjb-K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <a> <h1>Recomendaciónes:</h1> Dr Juan Carlos Pérez Alva (México)</a>
                    <div class="video-container">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mqoYJ1PhO6U?si=T-z13xA6kk43x23d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <a> <h1>Recomendaciónes:</h1>  Dra. Gisela Cobo - Nutrición Deportiva </a>
                    <div class="video-container">
                    <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/RCBqygznRfM?si=BK8PKM3xIz6k4tjo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2500">
                    <a> <h1>Recomendaciónes:</h1>  Mr. Doctor sobre tarjeta médica digital Findoctor México </a>
                    <div class="video-container">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iTP8al3o9ho?si=0TFLRN19RUI_edtM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--TERMINO CON DISEÑO DE BOOSTRAP-->
   
    <footer>
        <p>&copy; 2024 Imagen Médica. Todos los derechos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>