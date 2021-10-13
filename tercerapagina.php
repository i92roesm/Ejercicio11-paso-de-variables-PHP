<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11. Pase de variables entre archivos</title>
</head>
<body>
    <h1>Mooode Centros</h1>
    <h3>Elegir asignaturas</h3>
    
    <?php 
        require('util.php');
        
        // asi tb funciona  require 'util.php';
        // @require 'util.php'   si no está el archivo no da error, se lo traga
        
        
        // esto me va a dar posibles errores en el post
        enableErrors();

        $usuario2 = read('usuario1');
        
        $clave2 = read('clave1');

        // $usuario1 = $_POST['usuario1'];
        
        // $clave1 = $_POST['clave1'];
        
        $clavebis2 = read('clavebis1');
        $nombre = read('nombre');
        $apellidos = read('apellidos');
        $email = read('email');
        
        
    
    
    ?>
   
    <form action="cuartapagina.php" method="post">
        
         <input type="hidden" name="usuario3" value="<?php echo $usuario2 ?>" />
         <input type="hidden" name="clave3" value="<?php echo $clave2 ?>" />
         <input type="hidden" name="clavebis3" value="<?php echo $clavebis2 ?>" />
         
         <input type="hidden" name="nombre1" value="<?php echo $nombre ?>" />
         <input type="hidden" name="apellidos1" value="<?php echo $apellidos ?>" />
         <input type="hidden" name="email1" value="<?php echo $email ?>" />
         <label for="asignaturas">
            Asignaturas matriculadas:
         </label>
         <br><br>
          <!--aqui el name lleva corchetes par indicar que va a ser un array-->
         <select name="modulos[]" id="asignaturas" size="5" multiple>
                <option>&nbsp;</option>
                <option value="php">PHP</option>
                <option value="javascript">JavaScript</option>
                <option value="diweb">DIWEB</option>
                <option value="despliegues">Despliegues</option>
                <option value="eie">EIE</option>
         </select>
         <br><br>
         &nbsp;<input type="submit" value="Matricularme" > 
    </form>
    <br><br>
     <?php 
        
        // CHIVATOS
        
        // echo "<br/> &nbsp; DATOS RECIBIDOS";
        
        // echo "<br/> &nbsp; Usuario: ". $usuario2 ;
        
        // echo "<br/> &nbsp; clave: ". $clave2 ; 
        // echo "<br/> &nbsp; clavebis: ". $clavebis2 ; 
        
        // echo "<br/> &nbsp; nombre: ". $nombre ;
        // echo "<br/> &nbsp; apellidos: ". $apellidos ;
        // echo "<br/> &nbsp; email: ". $email ;
    
    ?>
</body>
</html>

