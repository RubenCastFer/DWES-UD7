<?php
function pedirPoblacion()
{
    // Vaciamos algunas variables
    $error = "";
    $numero = "";
    $resultado = "";

    // Iniciamos el cliente SOAP
    // Escribimos la dirección donde se encuentra el servicio
    $url = "http://localhost/DWES-EJERCICIOS-CLASE/DWES-UD7/ejercicio4/servidor/index.php";
    
    $uri = "http://localhost/DWES-EJERCICIOS-CLASE/DWES-UD7/";
    
    $cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

    // Ejecutamos las siguientes líneas al enviar el formulario
    if (isset($_POST['enviar'])) {
        // Establecemos los parámetros de envío
        if (!empty($_POST['numero'])) {
            $numero = $_POST['numero'];


            // Si los parámetros son correctos, llamamos a la función letra de calcularLetra.php
            
            
            
            $resultado = $cliente->getCiudades($numero);

        } else {
            $error = "error";
        }
    }
    include "./views/clienteView.php";
}
