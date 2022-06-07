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
    <!--Acceso a nuestro css-->
    <style>
        body {
            background-color: black;
        }

        .form-signup {
            background-color: white;
            border-radius: 10px;
            opacity: 0.95;
            font-weight: bolder;
        }

        .contact-section {
            opacity: 0.95;
        }
    </style>
</head>

<body>
    <?php
    error_reporting(0);
    require_once 'conexion.php';

    //Variables contacto
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    /* Realizar registro  en BBDD*/
    if (isset($_POST["nombre"])) {

        $sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES('" . $nombre . "', '" . $correo . "', '" . $mensaje . "')";

        if (mysqli_query($_SESSION["con"], $sql) === TRUE) {
            echo '<script type="text/javascript">', 'Swal.fire("Mensaje enviado");', '</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $_SESSION["con"]->error;
        }
    }
    ?>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Inicio</a>
        </div>
    </nav>
    <!-- Contacta -->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Nosotros te contactamos</h2>
                    <form method="post" class="form-signup" name="contactForm" id="contactForm">
                        <p>Introduce tu nombre</p>
                        <input type="text" id="nombre" name="nombre" required />
                        <p>Introduce correo de contacto</p>
                        <input type="email" id="correo" name="correo" required />
                        <p>Mensaje</p>
                        <input type="text" id="mensaje" name="mensaje" required />
                        <p>&nbsp;</p>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Email -->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row  justify-content-center gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">info@chessworld.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pie de página -->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Chess World 2022</div>
    </footer>
    <!-- Efectos JS Bootstrap -->
    <script src="js/scripts.js"></script>
</body>

</html>