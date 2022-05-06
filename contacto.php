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
        <link rel="stylesheet" href="css/styles.css"><!--Acceso a nuestro css-->
        <style>
        body {background-color: black;}
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
            </div>
        </nav>
        <!-- Contacta -->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Nosotros te contactamos</h2>
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Introducir correo electrónico -->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Email..." aria-label="Email..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Conecta</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">Email obligatorio</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email no válido</div>
                            <!-- Mensaje una vez introducido el email-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Dirección enviada correctamente</div>
                                </div>
                            </div>
                            <!-- Posible mensaje de error-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error al enviar los datos</div></div>
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
                                <div class="small text-black-50"><a href="#!">josemanuelcalvobaez@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pie de página -->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Chess World 2022</div></footer>
        <!-- Efectos JS Bootstrap -->
        <script src="js/scripts.js"></script>
    </body>
</html>

