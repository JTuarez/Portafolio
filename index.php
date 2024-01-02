
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portafolio</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Jordy Tuarez</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#portfolio" onclick="seleccionar()">PORTFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/Imagen1.png" alt="">
            </div>
            <h1>Jordy Tuarez</h1>
            <h2>Analista Programador</h2>
            <div class="redes">
                <a href="https://www.linkedin.com/in/jordy-tuarez-23b390166/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </section>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mí</h2>
            <p><span>Hola soy Jordy tuarez</span> y soy Analista Programador con las caracterizticas
                importantes dentro del area de la programacion tales como; la capacidad de analisis, dedicacion, trabajo
                en equipo,
                resolucion de problemas, creatividad y me caracterizo por mi motivacion de autodidacta, es por eso que
                me gusta conocer distintas areas de la informatica. Actualmente con la motivacion en el campo del
                desarrollo web</p>

            <div class="fila">
                <!-- datos personales -->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            16/09/1998
                        </li>
                        <li>
                            <strong>Teléfono</strong>
                            994121475
                        </li>
                        <li>
                            <strong>Email</strong>
                            jordyalexjatr@hotmail.com
                        </li>
                        <li>
                            <strong>Website</strong>
                            jordytuarez.com
                        </li>
                        <li>
                            <strong>Dirección</strong>
                            Santiago de Chile
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            <span>FREELANCE</span>
                        </li>
                    </ul>
                </div>

                <!-- intereses -->
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>JUEGOS</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>MUSICA</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-plane"></i>
                            <span>VIAJAR</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-person-hiking"></i>
                            <span>DEPORTE</span>
                        </div>                       
                    </div>
                </div>
            </div>
            <button>
                Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </button>
        </div>
    </section>

    <!-- SECCION SKILLS -->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Skills</h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <h3>Technical Skills</h3>
                    <div class="skill">
                        <span>Javascript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>89%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>PHP</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Git</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>81%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>SQL</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>55%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Professional Skills -->
                <div class="col">
                    <h3>Professional Skills</h3>
                    <div class="skill">
                        <span>Comunicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabajo en Equipo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Creatividad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Capacidad de Analisis</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>94%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CURRICULUM -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Curriculum</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Educación</h3>
                    <div class="item izq">
                        <h4>Analista Programador</h4>
                        <span class="casa">Universidad Tecnologia Inacap</span>
                        <span class="fecha">2018 - 2020</span>
                        <p>Titulado y capacitado para analizar y desarrollar aplicaciones informáticas en diversas plataformas tecnológicas mediante metodologías ágiles, entregando soporte y mantención a los sistemas Informáticos, y realizando las pruebas de calidad y protección de la información durante el ciclo de vida de desarrollo del software. Aporta al desarrollo del país e impacta a la vida de las personas, a través del desarrollo e implementación de proyectos tecnológicos de vanguardia que contribuyen a la transformación digital de las organizaciones. </p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Meteodologia Agil Scrum</h4>
                        <span class="casa">Udemy</span>
                        <span class="fecha">20 hrs</span>
                        <p>Preparado para el trabajo con la meteodologia agil Scrum con la importancia del trabajo en equipo, la adaptacion a los cambios, planificacion de un proyecto de software, reuniones de las distintass fases del sprint. Las funciones importantes de los distintos roles dentro de un equipo Scrum como el Product Owner, Scrum Master y Developers.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>

                </div>

                <div class="col derecha">
                    <h3>Experiencia de trabajo</h3>
                    <div class="item der">
                        <h4>Tecnico de proyectos TI</h4>
                        <span class="casa">KLG Consulting</span>
                        <span class="fecha">2020 - 2021</span>
                        <p>Administracion de Suite Microsfot 365Gestion de maquinas virtuales dentro de servidores de la empresa (implementacion) Encargado de implementar y administrar las redes internas de comunicacion de la empresa .Encargado de brindar soporte tecnico nivel 2 a los clientes internos y externos de la empresa. Homologacion de dispositivos como Gateways en la Subtel. Administracion de equipos tecnologicos de la empresa.
                            Proyecto de pagina web del lado frontend con el uso de html css y javascript</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Coordinador TI</h4>
                        <span class="casa">Geosinergia</span>
                        <span class="fecha">2022 - 2023</span>
                        <p>Coordinador informatico, encargado de la administracion de servidores con maquinas virtuales redes TCP/IP, hardware y software nivel alto, Active directory manejo y creacion de usuarios y roles, Administracion de Microsoft 365 a nivel Professional
                            configuracion de los equipos para el uso de los usuarios dentro de la empresa, encontrar soluciones y mejoras al area informatica, soporte informatico mediante herramienta de tickets</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION PORTFOLIO -->
    <section id="portfolio" class="portfolio">
        <div class="contenido-seccion">
            <h2>PORTAFOLIO</h2>
            <div class="galeria">
                <div class="proyecto">
                    <img src="img/p1.jpg" alt="">
                    <div class="overlay">
                        <h3>Diseño Creativo</h3>
                        <p>Fotografía</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p2.jpg" alt="">
                    <div class="overlay">
                        <h3>Diseño Creativo</h3>
                        <p>Fotografía</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p3.jpg" alt="">
                    <div class="overlay">
                        <h3>Diseño Creativo</h3>
                        <p>Fotografía</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p4.jpg" alt="">
                    <div class="overlay">
                        <h3>Diseño Creativo</h3>
                        <p>Fotografía</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p5.jpg" alt="">
                    <div class="overlay">
                        <h3>Diseño Creativo</h3>
                        <p>Fotografía</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img/p6.jpg" alt="">
                    <div class="overlay">
                        <h3>Diseño Creativo</h3>
                        <p>Fotografía</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->  
                             
                <div class="col">
                <form action = "index.php" method="POST" >  
                    <input type="text" name="nombre" placeholder="Tú Nombre" required="">
                    <input type="number" name ="telefono" placeholder="Número telefónico" required="">
                    <input type="email" name="correo" placeholder="Dirección de correo" required="">
                    <input type="text" name="tema" placeholder="Tema" required="">
                    <textarea name="msj" id="msj" cols="30" rows="10" placeholder="Mensaje"></textarea>                   
                   <input  type="submit" name="enviar">          
                </form>

                <?php

                if(isset($_POST["enviar"])){
                    $nombre = $_POST['nombre']; 
                    $telefono = $_POST['telefono'];
                    $correo = $_POST['correo'];
                    $tema = $_POST['tema'];
                    $msj = $_POST['msj'];
                    

                    $destinatario = "jordyalexjatr@hotmail.com";
                    $asunto = "Nuevo mensaje de $correo ";

                    $contenido="Nombre: $nombre \n";
                    $contenido.="Correo: $correo \n";
                    $contenido.= "Telefono $telefono \n";
                    $contenido.="Mensaje: $msj";
                    $contenido.= "Tema $tema";
                    
                    $header ="From: jordyalexjatr@hotmail.com";
                    $correo = mail($destinatario, $asunto, $contenido, $header );
                     
                    if($correo){
                        echo "<script>alert('El correo se envio correctamente') ;</script>";

                    }else{
                        echo "<script>alert('El correo no se envio') ;<script/>";
                    }
                }
                  ?>
                </div>
                
                <!-- Mapa -->
                <div class="col">
                    <img src="img/casa.png" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                Santiago de Chile
                            </li>
                            <li>
                                <i c    lass="fa-solid fa-mobile-screen"></i>
                                Llamanos: 569 - 94121475
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                Email: jordyalexjatr@hotmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
          <a href="https://www.linkedin.com/in/jordy-tuarez-23b390166/"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>