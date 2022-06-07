<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--Se utiliza la etiqueta meta, como me se ve en la linea anteior, cuando se quiere optimizar para dispositivos móviles-->
    <title>ChessWorld</title>
    <!--Título de la pestaña-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert2@11.4.16/dist/sweetalert2.all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        #mainNav {
            background-color: black;
        }

        #mainNav .navbar-brand {
            color: #FFF;
            font-weight: 700;
            padding: 0.9rem 0;
        }
    </style>
</head>

<body>
    <?php
    error_reporting(0);
    // Retomamos la sesión e indicamos que muestre por pantalla los datos de la misma
    session_start();
    $nombre = $_POST['nombre'];
    $_SESSION['nombre'] = $nombre;
    $clase = $_POST['clase'];
    $_SESSION['clase'] = $clase;

    //Variables contacto
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    /* Conexión BBDD */
    $servername = "localhost";
    $database = "bbdd";
    $username = "root";
    $password = "";

    // Conexión BBDD
    $conn = mysqli_connect($servername, $username, $password, $database);

    /* Realizar registro incidencias*/
    if (isset($_POST["nombre"])) {

        $sql = "INSERT INTO incidencias (nombre, correo, mensaje) VALUES('" . $nombre . "', '" . $correo . "', '" . $mensaje . "')";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo '<script type="text/javascript">', 'Swal.fire("Mensaje enviado");', '</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_close($conn);
    }
    ?>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <a class="navbar-brand" href="seleccionNoUser.php">Selección</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link open-modal" data-open="modal">Reporta un problema</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ACCIÓN DEL MODAL -->
    <div class="modal" id="modal">
        <div class="modal-dialog">
            <header class="modal-header">
                &nbsp;
                <div data-close></div>
            </header>
            <section class="modal-content">
                <p><strong>Reporta un problema</strong></p>
                <form method="post" class="form-signup" name="incidencia" id="incidencia">
                    <p>Introduce tu nombre</p>
                    <input type="text" id="nombre" name="nombre" required />
                    <p>Introduce correo de contacto</p>
                    <input type="email" id="correo" name="correo" required />
                    <p>Mensaje</p>
                    <input type="text" id="mensaje" name="mensaje" required />
                    <p>&nbsp;</p>
                    <input type="submit" value="Enviar">
                </form>
            </section>
        </div>
    </div>
    <!-- Modales con aperturas -->
    <section class="projects-section bg-light" id="projects">

        <div class="container px-4 py-5" id="custom-cards">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-chess-king fa-4x mb-2 text-black"></i>
                <h2 class="text-blackF mb-5">Aperturas de Ajedrez</h2>
            </div>

            <!-- Fila de opciones -->
            <div class="container py-4">
                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h2>Movimientos</h2>
                            <p>Parece algo sencillo, pero siempre está bien recordar como se mueven las piezas de ajedrez. ¡En una partida no podrás dudar!</p>
                            <button class="btn btn-outline-light" type="button" onclick="window.location='movimientos.php'">¡Realiza el test!</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2>Aperturas y jugadas</h2>
                            <p>Si no sabes lo que está haciendo tu contrincante, siempre estarás en desventaja. Deberías conocer las aperturas y jugadas básicas del ajedrez.</p>
                            <button class="btn btn-outline-secondary" type="button" onclick="window.location=''">¡Enseñame!</button>
                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h2>Movimientos</h2>
                            <p>Parece algo sencillo, pero siempre está bien recordar como se mueven las piezas de ajedrez. ¡En una partida no podrás dudar!</p>
                            <button class="btn btn-outline-light" type="button" onclick="window.location='movimientos.php'">¡Realiza el test!</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2>Aperturas y jugadas</h2>
                            <p>Si no sabes lo que está haciendo tu contrincante, siempre estarás en desventaja. Deberías conocer las aperturas y jugadas básicas del ajedrez.</p>
                            <button class="btn btn-outline-secondary" type="button" onclick="window.location=''">¡Enseñame!</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4 py-5">
    </section>
    </div>
    <!-- Pie de página -->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Chess World 2021</div>
    </footer>
    <!-- Efectos JS -->
    <script src="js/scripts.js"></script>
</body>

</html>