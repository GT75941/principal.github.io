<?php
// El proposito de esta clase es manejar datos de sesión
//Ing. Willian Zamalloa Paro
class Session {
    // Verifica si existe una sesión
    public static function existeSesion($name) {
            $rpta = FALSE;
            if( isset( $_SESSION[$name] ) ) {
                    $rpta = TRUE;
            }
            return $rpta;
    }

    // Verifica si NO existe una sesión
    public static function NoExisteSesion($name) {
            $rpta = TRUE;
            if( isset( $_SESSION[$name] ) ) {
                    $rpta = FALSE;
            }
            return $rpta;
    }

    // Retorna el valor de un atributo de sesión
    public static function getSesion($name) {
            $value = null;
            if( self::existeSesion($name) ) {
                $value = $_SESSION[$name];
            }
            return $value;
    }

    // Recupera el valor de un atributo de sesión y lo elimina
    public static function eliminarSesion($name) {
            $value = null;
            if( self::existeSesion($name) ) {
                    $value = $_SESSION[$name];
                    self::removeSesion($name);
            }
            return $value;
    }

    // Guarda un atributo en sesión
    public static function setSesion($name, $value) {
            $_SESSION[$name] = $value;
    }

    // Elimina un atributo de sesión
    public static function removeSesion( $name ){
            unset( $_SESSION[$name] );
    }
}
?>