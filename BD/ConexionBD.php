<?php
//Autor: Ing. Willian Zamalloa Paro
require_once '../util/Util.php';
class ConexionBD {  
    //Atributos
    private $server;
    private $usuario;
    private $password;
    private $bd;
    private $conexion;
    //Constructor
    public function __construct() {
        $this->server="localhost";
        $this->usuario="root";
        $this->password="";
        $this->bd="bdpersona1";
    }
    //Conectar a la BD
    public function conectarBD(){
        $this->conexion = mysqli_connect($this->server, $this->usuario, $this->password, $this->bd);
        if($this->conexion){ //Ing. Willian Zamalloa Paro
            return $this->conexion;
        }   
        else{
            return NULL;        
        }        
    }
    //Ejecutar una consulta
    public function ejecutarQuery($query){
        
        try {

            $dbc = $this->conectarBD();
            //Ejecutamos la consulta y guardamos
            //el resultado
            $result = mysqli_query($dbc, $query);
            $lista = array(); //declaramos un arreglo
            //Alamacenamos cada fila de la consulta
            //en el arreglo
            while ($row = mysqli_fetch_array($result)) {  //($result, MYSQLI_BOTH))
                $lista[] = $row; 
            }
            //Siempre se debe liberar el resultado, 
            //cuando el objeto del resultado ya no es necesario. 
            mysqli_free_result($result);
            //agrego esta linea para que pueda realizar 
            //dos consultas o mas a la vez en la BD
            mysqli_next_result($this->conexion);
            print_r($dbc->error);
            return $lista;
            
        } catch (Exception $e) {
            Util::save_log($e, $query);
            throw $e;
        }
    }
}

//---PROBAMOS SI FUNCIONA O NO LA CLASE
// $basedatos = new ConexionBD();
// $resultado = $basedatos->ejecutarQuery("select * from tpersona;");
// print_r($resultado);
?>
