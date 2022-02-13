

<!DOCTYPE html>
<html>
    <head>
        <title>Ciudad</title>
        <link rel="stylesheet" type="text/css" href="/estilo.css">
    </head>
<body>
   
    <form action="index.php" method="post">
    <?php //IMPORTANTE: ELIMINA EL ESPACIO ANTES DE LA INTERROGACIÓN
        print "<input type='number' name='numero' value='$numero'>";
        print "<input type='submit' name='enviar' value='calcular'>";
        print "<p class='error'>$error</p>";
    ?>


    <?php
        // var_dump($resultado);
        if (!empty($resultado)){
            echo "<table>";
            echo "<tr>";
            echo "<th>Ciudad</th>";
            echo "<th>Poblacion</th>";
            echo "</tr>";
            
            foreach ($resultado as $value) {
                echo "<tr>";
                echo "<th>$value[nombre]</th>";
                echo "<th>$value[poblacion]</th>";
                echo "</tr>";
            }
            echo "</table>";

        }

        
    ?>
    </form>
</body>
</html>