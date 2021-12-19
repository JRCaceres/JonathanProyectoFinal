<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Usuario no Ingresado");
    window.location = "../";
    </script>
    ';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Jonatan Caceres-->
    <!--proyecto Final -->
    <meta charset="iso-8859-1">
    <title>Menu Usuario</title>
    <LINK REL=StyleSheet HREF="../acesos/css/estilomenu.css" TYPE=" " MEDIA=screen>
    </head>
    <body>
    <header>
      <nav>
        <ul class="nav">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Blogs</a>
          <ul>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 1</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 2</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 3</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 4</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 5</a></li>
          </ul></li>
          <li><a href="cerrar_se.php">Cerrar Seccion</a></li>
        </ul>
      </nav>
    </header>
        <div class="section" id="contacts">
            <h1><span>Sigeme En:</span></h1>
            <div>
                <a href="https://www.sololearn.com/" target="_blank">
                    <img alt="SoloLearn" src="https://www.sololearn.com/Uploads/icons/sololearn.png" height="100" width="100"/>
                </a>
                <a href=" https://www.instagram.com/">
                    <img alt="instagram" src="../acesos/imagen/pngwing.com (1).png" height="100" width="100"/>
                </a>
                <a href="https://twitter.com/">
                    <img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png" height="100" width="100"/>
                </a>
                <a href="https://www.youtube.com/">
                    <img alt="youtube" src="../acesos/imagen/pngwing.com.png" height="100" width="100"/>
                </a>
            </div>
        </div>
    <footer>
        <div class="copyright">
            &copy; <b>2021. All rights reserved for Jonathan Caceres.</b>
        </div>
    </footer>
    <script src=""></script>

    </body>
</html>