<?php //IMPORTANTE: ELIMINA EL ESPACIO ANTES DE LA INTERROGACIÓN
// Instanciamos un nuevo servidor SOAP
$uri="http://192.168.129.155/DWES/EJERCICIO_DE_CLASE/DWES-UD7";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("parImpar");
$server->handle();

// Función para obtener raíz cuadrada
function parImpar($num) {
    $resultado="";
    if(($num % 2) == 0){
        $resultado = "par";
    }else{
        $resultado= "impar";
    }
    return $resultado;
}
?>