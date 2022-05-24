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
    <!-- Selección -->
    <section class="signup-section">

        <div class="container px-4 py-5" id="custom-cards">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fa fa-gamepad fa-4x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Selecciona un modo de aprendizaje</h2>
            </div>

            <!-- Fila 1 de opciones -->
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <!-- Aprender movimientos -->
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color: #FBD603;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">Movimientos</h2>
                        </div>
                    </div>
                </div>

                <!-- Aprender jugadas nv. 1 -->
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">Jugadas nvl. 1</h2>
                        </div>
                    </div>
                </div>

                <!-- Aprender jugadas nv. 2 -->
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">Jugadas nvl. 2</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fila 2 de opciones -->
            <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4 py-5">

                <!-- Jugar contra otro jugador -->
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color: #ABBAEA">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">Juega contra otro jugador</h2>
                        </div>
                    </div>
                </div>

                <!-- Jugar contra la IA -->
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">Juega contra la IA</h2>
                        </div>
                    </div>
                </div>

                <!-- <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                        </div>
                    </div>
                </div> -->

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