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
    <!--Acceso a css + librería bootstrap-->
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
    //error_reporting(0);
    // Retomamos la sesión e indicamos que muestre por pantalla los datos de la misma
    require_once 'conexion.php';
    $usuario = $_SESSION['usuario'];
    //$_SESSION['usuario'] = $usuario;

    /* Consulta puntos y nombre desde la base de datos */
    $user = "SELECT nombre from usuarios WHERE nombre ='" . $usuario . "'";
    $userok = mysqli_query($_SESSION["con"], $user) or die('Error en el query database');

    $puntos = "SELECT aciertos from usuarios WHERE nombre ='$usuario'";
    $puntosok = mysqli_query($_SESSION["con"], $puntos) or die('Error en el query database');

    //Valida que la consulta esté bien hecha
    $fila3 = mysqli_fetch_array($userok);
    $fila4 = mysqli_fetch_array($puntosok);

    $_SESSION['nombre'] = $fila3["nombre"];
    $_SESSION['aciertos'] = $fila4["aciertos"];

    /* Realizar registro incidencias*/
    if (isset($_POST["nombre"])) {

        $sql = "INSERT INTO incidencias (nombre, correo, mensaje) VALUES('" . $nombre . "', '" . $correo . "', '" . $mensaje . "')";

        if (mysqli_query($_SESSION["con"], $sql) === TRUE) {
            echo '<script type="text/javascript">', 'Swal.fire("Mensaje enviado");', '</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $_SESSION["con"]->error;
        }
        //mysqli_close($_SESSION["con"]);
    }

    //Se llama a esta función desde el código JS al final de usergame.php cuando se valida que la respuesta es correcta
    function escritura($usuario)
    {
        /* Insert en la base de datos para sumar puntos si se acierta*/
        $sql = "UPDATE usuarios set aciertos=aciertos+1 where nombre= '" . $usuario . "'";

        //Valida que la consulta esté bien hecha
        if (mysqli_query($_SESSION["con"], $sql) === TRUE) {
            //echo '<script type="text/javascript">', 'Swal.fire("Puntuación registrada");', '</script>';;
        } else {
            echo "Error: " . $sql . "<br>" . $_SESSION["con"]->error;
        }

        /* AVISO - Hay que tener habilitado en la base de datos que acepte UPDATE sin restrinciones */
        /* Se puede configurar en PREFERENCES > SQL Editor y desmarcar la casilla Safe Updates */

        //mysqli_close($_SESSION["con"]);
    }

    //mysqli_close($_SESSION["con"]);
    ?>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <a class="navbar-brand" href="seleccionUser.php">Selección</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link open-modal" data-open="modal">Reporta un problema</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Test utilizando formularios -->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Contenedor Usuario y clase -->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/piezas.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Usuario <?php echo $_SESSION['usuario']; ?></h4>
                                <p class="mb-0 text-white-50">Aciertos <?php echo $_SESSION['aciertos']; ?></p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            &nbsp;
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
            <!-- Contenedor Jugada 1 -->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center" id="pregunta">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/1.jpg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Jugando las negras</h4>
                        <h4>¿Qué pieza debo mover para capturar al peón C4?</h4>
                        <h6>A. El caballo con un movimiento en L</h6>
                        <h6>B. El peón con un movimiento en línea</h6>
                        <h6>C. La torre moviéndose en diagonal</h6>
                        <!-- http://ajedrezdesdecasa.blogspot.com/p/jugadas-famosas-de-ajedrez.html -->
                        <form method="post" name="validar" onsubmit="return validarForm1()">
                            <select id="pregunta1">
                                <p>
                                    <option></option>
                                    <option value="A" name="A">A</option>
                                    <option value="B" name="B">B</option>
                                    <option value="C" name="C">C</option>
                            </select>
                            <p><input type="submit" value="Responder"></p>
                        </form>
                        <div class="btn-group">
                            <button type="button" class="open-modal btn btn-primary" data-open="modal1">
                                Pista
                            </button>
                            <div class="modal" id="modal1" data-animation="slideInOutLeft">
                                <div class="modal-dialog">
                                    <header class="modal-header">
                                        <!-- Pista -->
                                        &nbsp;
                                        <button class="close-modal" aria-label="close modal" data-close>
                                            ✕
                                        </button>
                                    </header>
                                    <section class="modal-content">
                                        <p><strong>Movimientos de las piezas</strong></p>
                                        <img src="assets\img\movimientos.png">
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contenedor Jugada 2 -->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/2.jpg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Jugando las blancas</h4>
                        <h4>¿Qué pieza debo mover para capturar al peón A7?</h4>
                        <h6>A. El rey con un movimiento en línea</h6>
                        <h6>B. El alfil moviéndose en diagonal</h6>
                        <h6>C. Con el peón D4 saltando al alfil</h6>
                        <form method="post" name="validar" onsubmit="return validarForm2()">
                            <select id="pregunta2">
                                <p>
                                    <option></option>
                                    <option value="A" name="A">A</option>
                                    <option value="B" name="B">B</option>
                                    <option value="C" name="C">C</option>
                            </select><br>
                            <p><input type="submit" value="Responder"></p>
                        </form>
                        <div class="btn-group">
                            <button type="button" class="open-modal btn btn-primary" data-open="modal1">
                                Pista
                            </button>
                            <div class="modal" id="modal1" data-animation="slideInOutLeft">
                                <div class="modal-dialog">
                                    <header class="modal-header">
                                        <!-- Pista -->
                                        &nbsp;
                                        <button class="close-modal" aria-label="close modal" data-close>
                                            ✕
                                        </button>
                                    </header>
                                    <section class="modal-content">
                                        <p><strong>Movimientos de las piezas</strong></p>
                                        <img src="assets\img\movimientos.png">
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contenedor Jugada 3 -->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/3.jpg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Jugando las negras</h4>
                        <h4>¿Qué pieza debo mover para capturar al rey E5?</h4>
                        <h6>A. La torre moviéndose en línea</h6>
                        <h6>B. El caballo con un movimiento en L</h6>
                        <h6>C. No es posible</h6>
                        <form method="post" name="validar" onsubmit="return validarForm3()">
                            <select id="pregunta3">
                                <p>
                                    <option></option>
                                    <option value="A" name="A">A</option>
                                    <option value="B" name="B">B</option>
                                    <option value="C" name="C">C</option>
                            </select><br>
                            <p><input type="submit" value="Responder"></p>
                        </form>
                        <div class="btn-group">
                            <!-- Pista que se abre con botón modal-->
                            <button type="button" class="open-modal btn btn-primary" data-open="modal1">
                                Pista
                            </button>
                            <div class="modal" id="modal1" data-animation="slideInOutLeft">
                                <div class="modal-dialog">
                                    <header class="modal-header">
                                        &nbsp;
                                        <button class="close-modal" aria-label="close modal" data-close>
                                            ✕
                                        </button>
                                    </header>
                                    <section class="modal-content">
                                        <p><strong>Movimientos de las piezas</strong></p>
                                        <img src="assets\img\movimientos.png">
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pie de página -->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Chess World 2021</div>
    </footer>
    <!-- Efectos JS Bootstrap -->
    <script src="js/scripts.js"></script>
    <!-- JS Validación de las preguntas -->
    <script>
        function validarForm1() {
            event.preventDefault();
            pregunta1 = document.getElementById('pregunta1').value;

            if (pregunta1 == "A") {
                <?php escritura($usuario); ?>
                Swal.fire("Correcto! El caballo con un movimiento en L, ya que el peón solo captura moviendo una posición en diagonal y la torre en horizontal y vertical");
            } else {
                Swal.fire("Respuesta incorrecta");
            }
        }

        function validarForm2() {
            event.preventDefault();
            pregunta2 = document.getElementById('pregunta2').value;

            if (pregunta2 == "B") {
                <?php escritura($usuario); ?>
                Swal.fire("Correcto! El alfil con un movimiento en diagonal, ya que el rey solo mueve una posición en línea y el peón solo captura una posición en diagonal");
            } else {
                Swal.fire("Respuesta incorrecta");
            }
        }

        function validarForm3() {
            event.preventDefault();
            pregunta3 = document.getElementById('pregunta3').value;

            if (pregunta3 == "C") {
                <?php escritura($usuario); ?>
                Swal.fire("Correcto! El movimiento no es posible, ya que el caballo mueve en L y la torre en la misma línea en horizontal o vertical");
            } else {
                Swal.fire("Respuesta incorrecta");
            }
        }
    </script>
</body>

</html>