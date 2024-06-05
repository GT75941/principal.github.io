<?php
require_once '../BD/ConexionBD.php';
class ContactoModel {
     //atributos
    private $codpersona;
    private $nombres;
    private $email;
    //propiedades
    function getCod(){ return $this->codpersona; }    
    function setCod($cod){
        $this->codpersona = $cod;
    }    
    function getNombres(){ return $this->nombres; }
    function setNombres($nombres){
        $this->nombres = $nombres;
    }
    function getEmail(){ return $this->email; }
    function setEmail($email){
        $this->email = $email;
    }
    //----metodos----------------
    function listar(){
        $query="select * from tpersona;";
        // $query="call usp_listar();";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);
        return $lista;
    }
    
    function insertar(){
        $id = $this->getCod();
        $nombre = $this->getNombres();
        $email = $this->getEmail();
        $query="insert into tpersona values('$id','$nombre','$email');";
        // $query="call usp_insertar('$id','$nombre','$email');";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }
    
    //Recuperar una Categoria 
    public function recuperarUnContacto($id){
                 
        $query = "select * from tpersona where codpersona = '$id'";
        $db = new ConexionBD();
        $lista = $db->ejecutarQuery($query);            
        return $lista[0];
    }
    
    //Edita una Categoria 
    public function editar(){
        $id = self::getCod();
        $cod = self::getNombres();
        $email = self::getEmail();                 
        $query = "update tpersona set nombres ='$cod', email = '$email' where codpersona = '$id'";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);   
    }
    
    function eliminar(){
        $id = $this->getCod();
        $query="delete from tpersona where codpersona = '$id'";
        $db = new ConexionBD();
        $db->ejecutarQuery($query);
    }
}
