<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11. Pase de variables entre archivos</title>
</head>
<body>
    <h1>Mooode Centros</h1>
    <h3>Registro de un nuevo alumno</h3>
    
    <?php
    
     // me hace falta el require para que de error si no encuantra el archivo util.php
        require('util.php');
        
        // asi tb funciona  require 'util.php';
        // @require 'util.php'   si no está el archivo no da error, se lo traga
        
        
        // esto me va a dar posibles errores en el post
        enableErrors();

        $usuario = read('usuario');
        
        $clave = read('clave');
        
        $clavebis = read('clavebis');
    
    ?>
    <!-- en el 'action' le indico a que página me redirige -->
    <form action="tercerapagina.php" method="post">
    <!-- Aquí con el atributo 'hidden' y php logro pasar la variable de una página a otra -->
         <input type="hidden" name="usuario1" value="<?php echo $usuario ?>" />
         <input type="hidden" name="clave1" value="<?php echo $clave ?>" />
         <input type="hidden" name="clavebis1" value="<?php echo $clavebis ?>" />
         <br>
         <span>Introduce tu nombre</span>&nbsp;&nbsp;<input type="text" name="nombre" value="" />
         <span>... y tus apellidos</span>&nbsp;&nbsp;<input type="text" name="apellidos" value="" />
         <br><br>
         <span>Tu correo electrónico</span>&nbsp;&nbsp;<input type="email" name="email" value="" />
         <br><br>
         
         <input type="submit" value="Registrar" />
    </form>
    <?php 
       
        // CHIVATOS
        // echo "<br/> &nbsp; DATOS RECIBIDOS";
        
        // echo "<br/> &nbsp; Usuario: ". $usuario ;
        
        // echo "<br/> &nbsp; clave: ". $clave ; 
        // echo "<br/> &nbsp; clavebis: ". $clavebis ; 
    
    ?>
    
    
</body>
</html>

