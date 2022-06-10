<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ChessWorld</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <!--Acceso css-->
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script src="https://unpkg.com/sweetalert2@11.4.16/dist/sweetalert2.all.js" crossorigin="anonymous"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/game.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <a class="navbar-brand" href="../index.php">Inicio</a>
    <?php
    require_once '../conexion.php';
    echo '<script type="text/javascript">', 'Swal.fire("Ejemplo de integración de un proyecto de Unity a un aplicativo web. El ajedrez no forma partre del proyecto presentado.");', '</script>';;
    if(!isset($_SESSION['usuario']))
      echo "<a class='navbar-brand' href='../seleccionNoUser.php'>Pantalla de Selección</a>";
    else
      echo "<a class='navbar-brand' href='../seleccionUser.php'>Pantalla de Selección</a>";
    ?>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">ChessWorld</div>
      </div>
    </div>
  </body>
</html>