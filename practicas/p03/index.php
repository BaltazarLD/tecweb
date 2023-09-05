<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=“es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> Practica 3 </title>
    </head>

    <body>
        <h2>Ejericicio 1</h2>
        <p>Determina cuáles de las sieguiente variables son válidas y explica por qué: </p>
        <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
        <?php
            //Aquí va el código php
            $_myvar;
            $_7var; 
            //myvar; => No es porque no inicia con el signo  
            $myvar; 
            $var7; 
            $_element1; 
            //$house*5; => Porque tiene un asterisco
            
            echo '<ul>';
            echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
            echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
            echo '<li>$myvar es válida porque inicia con una letra.</li>';
            echo '<li>$var7 es válida porque inicia con una letra.</li>';
            echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
            echo '</ul>';
        ?>

        <h2>Ejercicio 2</h2>
        <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
        <br>
        <p>$a = “ManejadorSQL”; <br> $b = 'MySQL'; <br> $c = &$a;</p>
        <?php
            $a = "ManejadorSQL";
            $b = 'MySQL';
            $c = &$a;
            
            echo '<br>';
            echo 'La variable $a: '.$a;
            echo '<br>';
            echo 'La variable $b: '.$b;
            echo '<br>';
            echo 'La variable $c: '.$c;
        ?>
    </body>
</html>