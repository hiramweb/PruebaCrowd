<?php

class Account_model extends CI_Model {
    //LOS MODELOS NO TIENEN MAS QUE FUNCIONES QUE SIRVEN PARA HACER TRANSACCIONES A LA BASE DE DATOS
    public function __construct()
    {
        $this->load->database();
    }

    //Funcion para acceder al sistema
    public function usuarios($T_USUARIO, $T_PASSWORD)//OBTIENE EL LISTADO DE REGISTROS DE LA TABLA DE DISPOSITIVOS
    {
        $user = mysql_real_escape_string($T_USUARIO);
        $pass = mysql_real_escape_string($T_PASSWORD);
        $sql = " SELECT * FROM TA01_CAT_USUARIOS WHERE T_PASSWORD = '".$pass."' AND T_USUARIO = '".$user."' OR T_EMAIL = '".$user."' "; 
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
}

?>
