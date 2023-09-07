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

            echo 'La variable $a: '.$a;
            echo '<br>';
            echo 'La variable $b: '.$b;
            echo '<br>';
            echo 'La variable $c: '.$c;
            
            echo '<br>';
            echo '<br>';

            $a = "PHP server";
            echo '<br>';
            echo 'La nueva variable $a: '.$a;
            echo '<br>';
            echo 'La nueva variable $b: '.$b;
            echo '<br>';
            

            echo 'La variable $a fue reasignada después de ser impresa por primera vez, <br>
            lo cual hizo que su valor impreso por segunda sea diferente. Así mismo, la variavle $b que hace referencia a $a cambia'
        ?>

        <h2>Ejercicio 3</h2>
        <p>Muestra el contenido de cada variable inmediatamente después de asignación verificar la evolución del tipo de estas variables <br></p>

        <p>
            $a = “PHP5”; <br>
            $z[] = &$a; <br>
            $b = “5a version de PHP”; <br>
            $c = $b*10; <br>
            $a .= $b; <br>
            $b *= $c; <br>
            $z[0] = “MySQL”; <br>
        </p>
        <?php
            $a = "PHP5";
            echo 'La variable $a asignada por primera vez: '.$a;
            echo '<br>';
            $z[] = &$a;
            var_dump ($z);
            echo '<br>';
            $b = "5a version de PHP"; 
            echo 'La variable $b= '.$b;
            echo '<br>';
            @$c = $b*10;  
            @$a .= $b;  
            @$b *= $c;  
            $z[0] = "MySQL";
            var_dump($z);
        ?>
    </body>
</html>