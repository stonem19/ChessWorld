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
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Acceso a nuestro css-->
    <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
        }
    </style>
</head>

<body>
    <?php
    //error_reporting(0);
    // Retomamos la sesión e indicamos que muestre por pantalla los datos de la misma
    require_once 'conexion.php';

    if ($_SESSION["con"] != null) {
        $sql = "INSERT INTO freeuser (registro, hostinfo) VALUES(NOW(), connection_id())";

        if (mysqli_query($_SESSION["con"], $sql) === TRUE) {
            echo 'Actividad registrada';
        } else {
            echo "Error: " . $sql . "<br>" . $_SESSION["con"]->error;
        }
    }else{
        echo "Sin conexión a la BBDD";
    }
    ?>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Selección -->
    <section class="signup-section">

        <div class="container px-4 py-5" id="custom-cards">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fa fa-gamepad fa-4x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Selecciona un modo de aprendizaje</h2>
            </div>

            <!-- Fila de opciones -->
            <div class="container py-4">
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Juega contra otro jugador</h1>
                        <p class="col-md-8 fs-4">Podrás jugar contra otro jugador de forma local. </p>
                        <button class="btn btn-primary btn-lg" type="button">Necesitas estar registrado</button>
                    </div>
                </div>

                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h2>Comprueba tus conocimientos</h2>
                            <p>Siempre está bien recordar cómo se mueven las piezas de ajedrez y poner a prueba tus conocimientos. ¡En una partida no podrás dudar!</p>
                            <button class="btn btn-outline-light" type="button" onclick="window.location='movimientos.php'">¡Realiza el test!</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2>Aperturas</h2>
                            <p>Si no sabes lo que está haciendo tu contrincante, siempre estarás en desventaja. Deberías conocer las aperturas y jugadas básicas del ajedrez.</p>
                            <button class="btn btn-outline-secondary" type="button" onclick="window.location='aperturas.php'">¡Enseñame!</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Pie de página -->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Chess World 2022</div>
    </footer>
    <!-- Link JS -->
    <script src="js/scripts.js"></script>
</body>

</html>