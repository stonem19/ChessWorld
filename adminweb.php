 <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!--Se utiliza la etiqueta meta, como me se ve en la linea anteior, cuando se quiere optimizar para dispositivos móviles-->
        <title>ChessWorld</title><!--Título de la pestaña-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Iconos de Font Awesome -->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link rel="stylesheet" href="css/styles.css"><!--Acceso a css + librería bootstrap-->
        <style>
            #mainNav{
                background-color:black;
            }
            #title{
                display: flex;
                justify-content: center;
            }
            #bbdd{
                display: flex;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        <?php
            error_reporting(0);
            // Retomamos la sesión e indicamos que muestre por pantalla los datos de la misma

            /* BBDD */
            // Variables
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";
                        
            // Conexión BBDD
            $conn = mysqli_connect($servername, $username, $password, $database);

            /* Consulta nombre usuario BBDD */ 
            $nombre="SELECT nombre from usuarios WHERE nombre ='User'";  
            $nombreok=mysqli_query($conn,$nombre) or die ('Error en el query database');
                            
            //Valida que la consulta esté bien hecha
            $fila4 = mysqli_fetch_array( $nombreok ); 
            
            //Lectura en la base de datos 
            function lectura(){
                    //Make var
                    $servername = "localhost";
                    $database = "bbdd";
                    $username = "root";
                    $password = "";

                    // Create connection

                    $conn = mysqli_connect($servername, $username, $password, $database);

                    $query = "SELECT nombre, pass, puntos from usuarios";

                    $result = mysqli_query($conn,$query);

                    $tabla = '<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                    <tr>
                    <td><font face="verdana"><b>Nombre</b></font></td>
                    <td><font face="verdana"><b>Contraseña</b></font></td>
                    <td><font face="verdana"><b>Puntos</b></font></td>
                    </tr>';

                    echo ($tabla);

                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                        $row["nombre"] . "</font></td>";
                        echo "<td width=\"25%\"><font face=\"verdana\">" .
                        $row["pass"] . "</font></td>";
                        echo "<td width=\"25%\"><font face=\"verdana\">" .
                        $row["puntos"] . "</font></td>";
                    }
            }                 
            mysqli_close($conn);

        ?>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Panel Admin -->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Contenedor Usuario y clase -->
                    <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                        <div class="col-lg-6"><img class="img-fluid" src="assets/img/piezas2.jpg" alt="..." /></div>
                            <div class="col-lg-6">
                                <div class="bg-black text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-left">
                                            <h4 class="text-white">Administrador</h4>
                                            <h3 class="mb-0 text-white-50"><?php echo $fila4["nombre"]; ?></h3>
                                            <hr class="d-none d-lg-block mb-0 ms-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </section>
        <div id="title">
            <h2>Lectura de datos</h2>
            &nbsp;
        </div>
        <div id="bbdd">
                <h3><?php lectura(); ?></h3>
        </div>

        <!-- Efectos JS Bootstrap -->
        <script src="js/scripts.js"></script>
    </body>
</html>

