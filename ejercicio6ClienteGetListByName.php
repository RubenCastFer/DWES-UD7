<?php //IMPORTANTE: ELIMINA EL ESPACIO ANTES DE LA INTERROGACIÓN
// Vaciamos algunas variables
$error = "";
$resultado = "";
$numero1 = "";

// Iniciamos el cliente SOAP
// Escribimos la dirección donde se encuentra el servicio
$wsdl = "https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL";
// $uri = "https://www.crcind.com/csp/samples/";
// $cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

// Ejecutamos las siguientes líneas al enviar el formulario
if (isset($_POST['enviar'])) {
    // Establecemos los parámetros de envío
    if (!empty($_POST['numero1'])) {
        $params = array(
            "name" => $_POST['numero1'],
        );
        $options = array(
            "uri" => $wsdl,
            "style" => SOAP_RPC,
            "use" => SOAP_ENCODED,
            "soap_version" => SOAP_1_1,
            "cache_wsdl" => WSDL_CACHE_BOTH,
            "connection_timeout" => 15,
            "trace" => false,
            "encoding" => "UTF-8",
            "exceptions" => false,
        );
        $cliente = new SoapClient($wsdl, $options);
        // Si los parámetros son correctos, llamamos a la función letra de calcularLetra.php
        $resultado = $cliente->GetListByName($params)->GetListByNameResult;
        
    } else {
        $error = "peinaso";
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

    <form action="ejercicio6ClienteGetListByName.php" method="post">
        <?php //IMPORTANTE: ELIMINA EL ESPACIO ANTES DE LA INTERROGACIÓN
        print "<input type='text' name='numero1' value='$numero1'>";
        print "<input type='submit' name='enviar' value='calcular'>";
        print "<p class='error'>$error</p>";
        ?>
    </form>
    <?php
    
    // var_dump($resultado);
    foreach ($resultado as $values) {
        foreach ($values as $value) {
            
            //var_dump($value);
            echo $value->ID."<br>";
            echo $value->Name."<br>";
            echo $value->SSN."<br>";
            echo $value->DOB."<br>";

        }
    }
    ?>
</body>

</html>