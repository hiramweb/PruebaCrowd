<?php

class Publico_model extends CI_Model {
    
    //LOS MODELOS NO TIENEN MAS QUE FUNCIONES QUE SIRVEN PARA HACER TRANSACCIONES A LA BASE DE DATOS
    public function __construct()
    {
        $this->load->database();
    }
    
    public function InmueblesRecientes(){
        $sql = " SELECT * FROM TA02_CAT_INMUEBLES ORDER BY E_ID DESC LIMIT 6 ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function caracteristicasInmuebleMostrador($E_ID){
        $sql = " SELECT i.E_ID, c.T_CARACTERISTICA, r.T_CANTIDAD 
                 FROM TA05_REL_CARACTERISTICAS_INMUEBLES AS r
                 INNER JOIN TA02_CAT_INMUEBLES AS i ON r.TA02_REL_E_ID_INMUEBLE = i.E_ID
                 INNER JOIN TA07_CAT_CARACTERISTICAS_INMUEBLES AS c ON r.TA07_REL_E_ID_PROPIEDADES = c.E_ID
                 WHERE i.E_ID = '".$E_ID."' 
                 ORDER BY I.E_ID DESC
                 LIMIT 3";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function filtroPropiedades($T_MUNICIPIO, $T_COLONIA, $F_PRECIO_UNO, $F_PRECIO_DOS, $T_CONCEPTO, $E_METROS_FRENTE, $E_METROS_LARGO){
        $mtFmax = 5 + $E_METROS_FRENTE;
        $mtFmin = $E_METROS_FRENTE - 5;
        $mtLmax = 5 + $E_METROS_LARGO;
        $mtLmin = $E_METROS_LARGO - 5;
        $sql = " SELECT * FROM TA02_CAT_INMUEBLES
                 WHERE T_MUNICIPIO = '".$T_MUNICIPIO."' AND T_COLONIA = '".$T_COLONIA."' 
                 AND F_PRECIO BETWEEN $F_PRECIO_UNO AND $F_PRECIO_DOS AND T_CONCEPTO = '".$T_CONCEPTO."' 
                 AND E_METROS_FRENTE BETWEEN $mtFmin AND $mtFmax 
                 AND E_METROS_LARGO BETWEEN $mtLmin AND $mtLmax ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function detalles($E_ID){
        $sql = " SELECT T_CONCEPTO, F_PRECIO, T_ESTADO, T_MUNICIPIO, T_COLONIA, T_CALLE, 
                 T_NUMERO_EXTERIOR, T_CODIGO_POSTAL, E_METROS_FRENTE, E_METROS_LARGO
                 FROM TA02_CAT_INMUEBLES WHERE E_ID = ".$E_ID;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function detallesFotos($E_ID){
        $sql = " SELECT T_NOMBRE_FOTO, TA02_E_ID_INMUEBLE FROM TA09_CTRL_FOTOS_INMUEBLES 
                 WHERE TA02_E_ID_INMUEBLE = ".$E_ID;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function detallesInmuebles($E_ID){
        $sql = " SELECT c.T_CARACTERISTICA, r.T_CANTIDAD 
                 FROM TA05_REL_CARACTERISTICAS_INMUEBLES AS r
                 INNER JOIN TA02_CAT_INMUEBLES AS i ON r.TA02_REL_E_ID_INMUEBLE = i.E_ID
                 INNER JOIN TA07_CAT_CARACTERISTICAS_INMUEBLES AS c ON r.TA07_REL_E_ID_PROPIEDADES = c.E_ID
                 WHERE r.TA02_REL_E_ID_INMUEBLE = ".$E_ID;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function descripcionInmueble($E_ID){
        $sql = " SELECT T_DESCRIPCION, T_TITULO FROM TA02_CAT_INMUEBLES WHERE E_ID = ".$E_ID;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function conceptoInmueble($E_ID){
        $sql = " SELECT T_CONCEPTO FROM TA02_CAT_INMUEBLES WHERE E_ID = ".$E_ID;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
}
?>