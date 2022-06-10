<!- Comentario abreviacion letra c -->

<!DOCTYPE html>  
<html lang="en">
    <head>
        <meta charset="UTF-8"> <!-- codificacion de nuestro documento  -->
        <meta description="description" content="Coca cola es la bebida 
            mas vendida en todo el mundo"> <!-- Descripcion de mi pagina web -->
        <meta name="keywords" content="bebida, gaseosa, cola"><!-- Palabras claves para buscar mi pagina -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Inicio - Coca Cola</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css"> <!--es una hoja de estilo que normaliza como se va a ver el estilo de mi pagina-->
        <link rel="stylesheet" href="style.css"> <!-- Cargo hoja de estilos. la etiqueta link nos permite enlazar 
        archivos externos al docummento principal -->
        <link rel="shortcut icon" href="img/favicon.png">
        <script src="https://kit.fontawesome.com/c0448fff64.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="index.html">
                    <img src="img/logo.svg" alt="" class="logo" />
                </a>
                <nav >
                    <a href="#inicio">Inicio</a>
                    <a href="#nosotros">Nosotros</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#galeria">Galeria</a>
                    <a href="#contactenos">Contáctenos</a>
                </nav>
                <a href="#" class="hamb"><i class="fa-solid fa-bars"></i></a>
            </div>
        </header>

        <main>
            <section id="inicio">
                <img src="img/bannerprincipal.jpg">
                <div class="bloque-inicio">
                    <h1>Bienvenidos a Coca Cola</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 
                        1500s, when an unknown printer took a galley of type and scrambled it 
                        to make a type specimen book. It has survived not only five centuries, 
                        but also the leap into electronic typesetting, remaining essentially 
                        unchanged. It was popularised in the 1960s with the release of Letraset 
                        sheets containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <a href="#nosotros" class="boton boton-rojo">Ver más</a>
                </div>
            </section>
            <section id="nosotros" class="seccion">
                <div class="container">
                    <p>
                        It was popularised in the 1960s with the release of Letraset 
                        sheets containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>

            </section>
            <section id="servicios" class="seccion">
                <div class="container">
                    <div class="row">
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio1.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 1</h3>
                                    <p> It was popularised in the 1960s with the release of Letraset 
                                        sheets containing Lorem Ipsum passages, and more recently with desktop 
                                        publishing software
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio2.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 2</h3>
                                    <p> It was popularised in the 1960s with the release of Letraset 
                                        sheets containing Lorem Ipsum passages, and more recently with desktop 
                                        publishing software
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>

                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio3.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 3</h3>
                                    <p> It was popularised in the 1960s with the release of Letraset 
                                        sheets containing Lorem Ipsum passages, and more recently with desktop 
                                        publishing software
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>

                        </div>
                    </div>     
                </div>
            </section>
            <section id="galeria">
                <div class="container-fluid">
                    <div class="row">
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                                <h4>Imagen1</h4>
                            </div>
                        </div>
                        <div class=" columna-33 columna-mobile-50 ">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio2.jpg">
                                <h4>Imagen2</h4>
                            </div>
                        </div>
                        <div class=" columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio3.jpg">
                                <h4>Imagen3</h4>
                            </div>
                        </div>
                        <div class=" columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                                <h4>Imagen4</h4>
                            </div>
                        </div>
                        <div class=" columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio2.jpg">
                                <h4>Imagen5</h4>
                            </div>
                        </div>
                        <div class=" columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio3.jpg">
                                <h4>Imagen6</h4>
                            </div>
                        </div>
                    </div>
                
                </div>

            </section>
            <section id="contactenos" class="seccion">
                <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" 
                marginwidth="0" id="gmap_canvas" 
                src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=boulevard%20maritimo%20Mar%20del%20Plata+(Argentina)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe> 
                <div class="container-fluid">
                    <div class="row">
                        <div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
                            <form action="index.php" method="post">
                                <div class="form-block">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-block">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-block">
                                    <textarea name="mensaje" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-block bloque-ultimo" >
                                    <input type="submit" class="boton boton-negro" value="Enviar">
                                </div>
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"]== "POST")
                                    {
                                        $nombre = $_POST["nombre"];
                                        $email = $_POST["email"];
                                        $mensaje= $_POST["mensaje"];
                                        //Verificamos si las variables tienen contenido//
                                        if (isset ($nombre))
                                        {
                                            if (isset($email))
                                            {
                                                if(isset($mensaje))
                                                {
                                                    $para = "nuevocorreo17@gmail.com";
                                                    $asunto ="Esto es una prueba";
                                                    $cuerpo = $nombre."\n".$email."\n".$mensaje;
                                                    $adicional ="From: noreply@jacoboamaru.com";

                                                    mail($para,$asunto,$cuerpo,$adicional);
                                                    ?>
                                                    <p>Envio exitoso</p>
                                                    <?php
                                                }
                                            }
                                        }
                                    }

                                ?>


                            </form>
                        </div>
                    </div>
                </div>
                
            </section>

        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="columna columna-25 columna-mobile-100">
                        <img src="img/logo-blanco.png" class="logo-footer">
                        <p>It has survived not only five centuries, 
                            but also the leap into electronic typesetting, remaining essentially 
                            unchanged.
                        </p>
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>Temas relacionados</h3>
                        <ul>
                            <li><a href="#">Tema 1</a></li>
                            <li><a href="#">Tema 2</a></li>
                            <li><a href="#">Tema 3</a></li>
                        </ul>
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>Datos de contacto</h3>
                        <ul>
                            <li>pzacristian@gmaiil.com></li>
                            <li>+5492235022897</li>
                            <li>Boulevard Maritimo 5445 - Mar del Plata <br> Buenos Aires - Argentina</li>
                        </ul>
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>Redes Sociales</h3>
                        <ul class="redes">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>
            <div class="barra-footer">
                &copy; Derechos Reservados - 2022
                
            </div>


        </footer>

        <script src="js/jquery.js"></script>

        <script src="js/funciones.js"></script>

    </body>


    
</html>