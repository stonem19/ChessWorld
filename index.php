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
        <link rel="stylesheet" href="css/styles.css"><!--Acceso a nuestro css con bootstrap-->
        <!-- Importar de ibreria jQuery minificada -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            //error_reporting(0);
            /* Sesión para enviar datos básicos a juego.php (juego sin registro) */
            session_start();
            if (!isset($_SESSION['temps'])){
            $_SESSION['temps'] = 0;
            }else{
                $_SESSION['temps'] = time();
            }

            //Variables jugar sin registro
            $nombre = $_POST['nombre'];
            $_SESSION['nombre']= $nombre;
            $clase = $_POST['clase'];
            $_SESSION['clase']= $clase;

            //Variables inicio de sesión
            $usuario = $_POST['usuario'];
            $_SESSION['usuario']= $usuario;
            $password2 = $_POST['password'];

            //Variables registro
            $usuarioreg = $_POST['usuarioreg'];
            $passw = $_POST['passw'];
            $points = 0;
            
            /* Conexión BBDD para usuarios registrados */
            // Variables
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";
                        
            // Conexión BBDD
            $conn = mysqli_connect($servername, $username, $password, $database);

            /* Comprobar usuario BBDD */

            if (isset($_POST["usuario"])) {
            
                /* Consulta nombre */ 
                $user="SELECT nombre from usuarios WHERE nombre ='".$usuario."'";  
                $userok=mysqli_query($conn,$user) or die ('Error en el query database');

                /* Consulta password */ 
                $pass="SELECT pass from usuarios WHERE pass ='".$password2."'";  
                $passok=mysqli_query($conn,$pass) or die ('Error en el query database');

                /* Obtener fecha */
                $fecha="SELECT now();";

                $sql1 = "INSERT INTO acountuser VALUES('".$fecha."')";

                if (mysqli_query($conn,$sql1) === TRUE) {
                    echo "<br>Nueva entrada en la base de datos<br>";
                } else {
                   echo "Error: " . $sql1 . "<br>" . $conn->error;
                }
                
                //Valida que la consulta esté bien hecha
                $fila1 = mysqli_fetch_array( $userok );
                $fila2 = mysqli_fetch_array( $passok );
                        
                //Validación usuario y contraseña 
                if ($fila1['nombre'] == $usuario && $fila2['pass'] == $password2){
                    echo "Usuario correcto";
                    if($fila2['pass'] == "123456"){
                        header("Location: seleccionUser.php");
                    }elseif($fila2['pass'] == "789101"){
                        header("Location: adminweb.php");
                    }else{
                        echo "Algo ha ido a mal";
                    }
                }else{
                    echo "Usuario o contraseña incorrecto";
                }
                        
                mysqli_close($conn);
            }

            /* Realizar registro */
            if (isset($_POST["usuarioreg"])) {
                            
                $sql = "INSERT INTO usuarios VALUES('".$usuarioreg."', '".$passw."', '".$points."')";
                    
                if (mysqli_query($conn,$sql) === TRUE) {
                     echo "<br>Nueva entrada en la base de datos<br>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                mysqli_close($conn);
            }
        ?>

        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Chess World</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Vista principal -->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Chess World</h1><!-- Bienvenido a Chess World -->
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Aprende a jugar al ajedrez</h2>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" onclick="window.location='seleccionNoUser.php'">Jugar como invitado</button>
                            <p>&nbsp;</p>
                            <button type="button" class="open-modal btn btn-primary" data-open="modal2">
                                Jugar como usuario
                            </button>
                            <p>&nbsp;</p>
                            <button type="button" class="open-modal btn btn-primary" data-open="modal3">
                                Registro
                            </button>
                        </div>
                        <!--ACCIONES DEL MODAL 1  [DESHABILITADO]-->
                        <div class="modal" id="modal1" data-animation="slideInOutLeft">
                            <div class="modal-dialog">
                                <header class="modal-header">
                                    <!--Jugar como Invitado-->
                                    &nbsp;
                                    <div data-close></div>
                                </header>
                                <section class="modal-content">
                                    <p><strong>Datos básicos</strong></p>
                                    <!-- Formulario principal donde recopilamos datos -->
                                    <form action="seleccionNoUser.php" method="post" name="validar">
                                        <p>Introduce tu nombre</p>
                                        <input type="text" id="nombre" name="nombre" required/>
                                        </select>
                                        <p>&nbsp;</p>
                                        <input type="submit" name="enviar" value="Jugar">
                                    </form>
                                </section>
                            </div>
                        </div>
                        <!--ACCIONES DEL MODAL 2-->
                        <div class="modal" id="modal2">
                            <div class="modal-dialog">
                                <header class="modal-header">
                                    <!--Jugar como Usuario-->
                                    &nbsp;
                                    <div data-close></div>
                                </header>
                                <section class="modal-content">
                                    <p><strong>Inicio de sesión</strong></p>
                                    <form method="post" name="usuario">
                                        <p>Introduce usuario</p>
                                        <input type="text" id="usuario" name="usuario" required/>
                                        <p>Introduce contraseña</p>
                                        <input type="password" id="password" name="password" required/>
                                        <p>&nbsp;</p>
                                        <input type="submit" value="Jugar">
                                    </form>
                                </section>
                             </div>
                        </div>
                        <!--ACCIONES DEL MODAL 3-->
                        <div class="modal" id="modal3">
                            <div class="modal-dialog">
                                <header class="modal-header">
                                    <!-- Registro de usuario-->
                                    &nbsp;
                                    <div data-close></div>
                                </header>
                                <section class="modal-content">
                                    <p><strong>Registro de Usuario</strong></p>
                                    <form method="post" name="registro">
                                        <p>Introduce usuario</p>
                                        <input type="text" id="usuarioreg" name="usuarioreg" required/>
                                        <p>Introduce contraseña</p>
                                        <input type="password" id="passw" name="passw" required/>
                                        <p>&nbsp;</p>
                                        <input type="submit" value="Registrarse">
                                    </form>
                                </section>
                             </div>
                        </div>
                    </div>
                </div>
            </div>          
        </header>
        <!-- Pie de página -->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Chess World 2022</div></footer>
        <!-- Efectos JS Bootstrap + boton modal-->
        <script src="js/scripts.js"></script>
    </body>
</html>

