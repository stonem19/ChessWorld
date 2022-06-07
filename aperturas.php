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
    require_once 'conexion.php';

    /* Realizar registro incidencias*/
    if (isset($_POST["nombre"])) {

        $sql = "INSERT INTO incidencias (nombre, correo, mensaje) VALUES('" . $nombre . "', '" . $correo . "', '" . $mensaje . "')";

        if (mysqli_query($_SESSION["con"], $sql) === TRUE) {
            echo '<script type="text/javascript">', 'Swal.fire("Mensaje enviado");', '</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $_SESSION["con"]->error;
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

            <!-- Modales con aperturas -->
            <div class="container py-4">
                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h2>Defensa Nimzo-india</h2>
                            <p> Existe una gran cantidad de variantes, pero las ideas estratégicas son simples. Las negras tratarán de lanzar un ataque en el centro y en el ala de dama, mientras que las blancas lo harán en el ala de rey.</p>
                            <button class="btn btn-outline-light" type="button" onclick="window.location='movimientos.php'">¡Quiero aprender!</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-white bg-dark border rounded-3">
                            <!-- bg-light -->
                            <h2>Defensa Francesa</h2>
                            <p>La defensa francesa está encuadrada dentro de las aperturas semiabiertas. En conjunto, la defensa francesa es una muy buena apertura que ha sido utilizada por numerosos grandes jugadores a lo largo de la historia.</p>
                            <button class="btn btn-outline-light" type="button" onclick="window.location=''">¡Enseñame!</button>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="col-md-12">
                        <div class="h-100 p-5 text-white bg-dark border rounded-3">
                            <!-- bg-light -->
                            <h2>Defensa Siciliana</h2>
                            <p>Goza de un gran prestigio entre los jugadores de cualquier nivel debido a su carácter agresivo, a la flexibilidad de las posiciones que otorga y, de manera significativa, al hecho de haber sido adoptada por varios campeones mundiales.</p>
                            <button class="btn btn-outline-light" type="button" onclick="window.location=''">¡A la Siciliana!</button>
                        </div>
                    </div>
                </div>
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