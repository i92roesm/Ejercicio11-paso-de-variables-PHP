<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11. Pase de variables entre archivos</title>
</head>
<body>
    <h1>Mooode Centros</h1>
    <h3>Datos del alumno</h3>
    <?php 
        
        require('util.php');
        
        // asi tb funciona  require 'util.php';
        // @require 'util.php'   si no está el archivo no da error, se lo traga
        
        
        // esto me va a dar posibles errores en el post
        enableErrors();

        $usuario4 = read('usuario3');
        
        $clave4 = read('clave3');
        $clavebis4 = read('clavebis3');
        
        $nombre2 = read('nombre1');
        $apellidos2 = read('apellidos1');
        $email2 = read('email1');
        
        

        // $usuario1 = $_POST['usuario1'];
        
        // $clave1 = $_POST['clave1'];
        
        
        
        $asignaturas = read('modulos');
        
        echo "<h4>&nbsp; DATOS DE MATRÍCULA :</h4>";
        
        echo "<p>&nbsp; Usuario: ". $usuario4 . "</p>";
        
        echo "<p>&nbsp; clave: ". $clave4 ."</p>"; 
        echo "<p>&nbsp; clavebis: ". $clavebis4 ."</p>"; 
        echo "<p>&nbsp; nombre: ". $nombre2 ."</p>"; 
        echo "<p>&nbsp; apellidos: ". $apellidos2 ."</p>"; 
        echo "<p>&nbsp; email: ". $email2 ."</p>"; 
        
        if(!esIgual($clave4,$clavebis4)){
             echo "<h3>&nbsp; Las contraseñas no coinciden..</h3>"; 
        }
        
         
        
        // for ($i=0;$i<count($desayuno);$i++)    
        // {     
        //     echo "<br/> &nbsp; Desayuno  :" . $desayuno[$i] . " , ";    
        // } 
        echo "<p>&nbsp; Asignaturas matriculadas: </p>";
        foreach($asignaturas as $valor){
            echo "<p> &nbsp;" ."=> <b>" . $valor . "</b></p>";
        }
        
        // unset($valor); // rompe la referencia con el último elemento del array
        
    
    ?>
    
    
    
</body>
</html>
