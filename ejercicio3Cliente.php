<?php //IMPORTANTE: ELIMINA EL ESPACIO ANTES DE LA INTERROGACIÓN
// Vaciamos algunas variables
$error = "";
$resultado = "";
$numero1 = "";
$numero2 = "";

// Iniciamos el cliente SOAP
// Escribimos la dirección donde se encuentra el servicio
$url = "http://192.168.129.155/DWES/EJERCICIO_DE_CLASE/DWES-UD7/ejercicio3Servidor.php";
$uri = "http://192.168.129.155/DWES/EJERCICIO_DE_CLASE/DWES-UD7/";
$cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

// Ejecutamos las siguientes líneas al enviar el formulario
if (isset($_POST['enviar'])) {
    // Establecemos los parámetros de envío
    if (!empty($_POST['numero1'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Si los parámetros son correctos, llamamos a la función letra de calcularLetra.php
        $resultado = $cliente->ciudades($numero1,$numero2);
    } else {
        $error = "<strong>Error:</strong> Debes introducir un DNI correcto<br/><br/>Ej: 45678987";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calcular </title>
        <link rel="stylesheet" type="text/css" href="/estilo.css">
    </head>
<body>
   
    <form action="ejercicio1.php" method="post">
    <?php //IMPORTANTE: ELIMINA EL ESPACIO ANTES DE LA INTERROGACIÓN
        print "<input type='number' name='numero1' value='$numero1'>";
        print "<input type='number' name='numero2' value='$numero2'>";
        print "<input type='submit' name='enviar' value='calcular'>";
        print "<p class='error'>$error</p>";
        print "<p style='font-size: 12pt;font-weight: bold;color: #0066CC;'>$resultado</p>";
    ?>
    </form>
</body>
</html>