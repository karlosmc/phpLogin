

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso POO con carlos PHP</title>
        
    </head>
    <body>
        
        <h1>
            Bienvenidos
        </h1>   
        
        <nav>
            <ul>
                <li><a href="index.php"> inicio </a> </li>
                <!--<li><a href="?cargar=crear">registrar</a></li>-->
            </ul>
        </nav>
        <section>
        <?php
            include_once('vistas/login.php');
        ?>
        </section>
    </body>
</html>
