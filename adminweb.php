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
     <!--Acceso a css + librería bootstrap-->
     <style>
         #mainNav {
             background-color: black;
         }

         #datos {
             margin-bottom: 240px;
         }
     </style>
 </head>

 <body>
     <?php
        //error_reporting(0);

        /* BBDD */
        $servername = "localhost";
        $database = "bbdd";
        $username = "root";
        $password = "";

        // Conexión BBDD
        $conn = mysqli_connect($servername, $username, $password, $database);

        /* Consulta nombre usuario BBDD 
        $nombre = "SELECT nombre from usuarios WHERE nombre ='User'";
        $nombreok = mysqli_query($conn, $nombre) or die('Error en el query database');
        $fila4 = mysqli_fetch_array($nombreok);*/

        //Lectura en la base de datos 
        function lectura()
        {
            //Make var
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";

            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $database);

            $query = "SELECT nombre, aciertos, permisos, id from usuarios";

            $result = mysqli_query($conn, $query);

            $tabla = '<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                    <h3>Usuarios</h3>
                    <tr>
                    <td><font face="verdana"><b>NOMBRE</b></font></td>
                    <td><font face="verdana"><b>PERMISOS</b></font></td>
                    <td><font face="verdana"><b>ID</b></font></td>
                    </tr>';

            echo ($tabla);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["nombre"] . "</font></td>";
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["aciertos"] . "</font></td>";
                echo "<td width=\"25%\"><font face=\"verdana\">" .
                    $row["permisos"] . "</font></td>";
                echo "<td width=\"25%\"><font face=\"verdana\">" .
                    $row["id"] . "</font></td>";
            }
        }

        function permisos()
        {
            //Make var
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";

            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $database);

            $query = "SELECT tipo, codigo from permisos";

            $result = mysqli_query($conn, $query);

            $tabla = '<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                <h3>Permisos</h3>
                <tr>
                <td><font face="verdana"><b>TIPO</b></font></td>
                <td><font face="verdana"><b>CODE</b></font></td>
                </tr>';

            echo ($tabla);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["tipo"] . "</font></td>";
                echo "<td width=\"25%\"><font face=\"verdana\">" .
                    $row["codigo"] . "</font></td>";
            }
        }

        function actividadUsers()
        {
            //Make var
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";

            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $database);

            $query = "SELECT registro, usuario from acountuser";

            $result = mysqli_query($conn, $query);

            $tabla = '<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                <h3>Actividad de usuarios registrados</h3>
                <tr>
                <td><font face="verdana"><b>FECHA</b></font></td>
                <td><font face="verdana"><b>USUARIO</b></font></td>
                </tr>';

            echo ($tabla);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["registro"] . "</font></td>";
                echo "<td width=\"25%\"><font face=\"verdana\">" .
                    $row["usuario"] . "</font></td>";
            }
        }

        function actividadNoUsers()
        {
            //Make var
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";

            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $database);

            $query = "SELECT registro, usuario from acountuser";

            $result = mysqli_query($conn, $query);

            $tabla = '<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                <h3>Actividad de usuarios no registrados</h3>
                <tr>
                <td><font face="verdana"><b>FECHA</b></font></td>
                </tr>';

            echo ($tabla);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["registro"] . "</font></td>";
            }
        }

        function incidencias()
        {
            //Make var
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";

            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $database);

            $query = "SELECT nombre, correo, mensaje from incidencias";

            $result = mysqli_query($conn, $query);

            $tabla = '<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                <h3>Incidencias</h3>
                <tr>
                <td><font face="verdana"><b>Pendientes de resolución</b></font></td>
                </tr>';

            echo ($tabla);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["nombre"] . "</font></td>";
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["correo"] . "</font></td>";
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["mensaje"] . "</font></td>";
            }
        }

        function contacto()
        {
            //Make var
            $servername = "localhost";
            $database = "bbdd";
            $username = "root";
            $password = "";

            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $database);

            $query = "SELECT nombre, correo, mensaje from contacto";

            $result = mysqli_query($conn, $query);

            $tabla = '<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                <h3>Contacto</h3>
                <tr>
                <td><font face="verdana"><b>Mensajes por responder</b></font></td>
                </tr>';

            echo ($tabla);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["nombre"] . "</font></td>";
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["correo"] . "</font></td>";
                echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                    $row["mensaje"] . "</font></td>";
            }
        }

        mysqli_close($conn);

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
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <div class="container" id="datos">
         <div class="row">
             <div class="col"><?php lectura(); ?></div>
             <div class="col"><?php permisos(); ?></div>
             <div class="col"><?php actividadUsers(); ?></div>
             <div class="col"><?php actividadNoUsers(); ?></div>
             <div class="col"><?php incidencias(); ?></div>
             <div class="col"><?php contacto(); ?></div>
         </div>
     </div>

     <!-- Efectos JS Bootstrap -->
     <script src="js/scripts.js"></script>
 </body>

 </html>