<?php
class Util {

    // Archivo de log de errores
    const LOG_FILE = "../log/hist.log";

    // Graba los datos de una excepción en el log de errores
    public static  function save_log( Exception $e, $query = "" ) {
        $mensaje = "File: " . $e->getFile() . "\n" .
                    "Line: " . $e->getLine() . "\n" .
                    "Code: " . $e->getCode() . "\n" .
                    "Message: " . $e->getMessage() . "\n" .
                    "Query: " . $query . "\n\n" ;
        error_log($mensaje, 3, "../log/hist.log");
    }

}
/*
 * Tipos de registro de error_log()
0 message es enviado al registro del sistema de PHP, usando el mecanismo 
 * de registro del Sistema Operativo o un archivo, dependiendo de qué directiva 
 * de configuración esté establecida en error_log. Esta es la opción predeterminada.
1 message es enviado por email a la dirección del parámetro destination. 
 * Este es el único tipo de mensaje donde se usa el cuarto parámetro extra_headers.
2 Ya no es una opción.
3 message es añadido al inicio del archivo destino. No se añade 
 * automáticamente una nueva línea al final de la cadena message.
4 message es enviado directamente al gestor de registro de SAPI.
 */
?>

