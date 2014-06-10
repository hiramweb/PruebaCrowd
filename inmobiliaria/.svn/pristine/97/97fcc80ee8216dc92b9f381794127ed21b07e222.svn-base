<?php
class Publico_filtro_model extends CI_Model {

    //LOS MODELOS NO TIENEN MAS QUE FUNCIONES QUE SIRVEN PARA HACER TRANSACCIONES A LA BASE DE DATOS
    public function __construct()
    {
        $this->load->database();
    }

    public function filtroInmuebles($T_ESTADO, $T_COLONIA, $T_CONCEPTO, $F_PRECIO_UNO, $F_PRECIO_DOS, $MTR_MIN_FRENTE, $MTR_MAX_FRENTE, $MTR_MIN_LARGO, $MTR_MAX_LARGO){
        $sql = " SELECT i.E_ID, i.T_CONCEPTO, i.T_TITULO, i.F_PRECIO, i.T_ESTADO, i.T_MUNICIPIO, i.T_COLONIA, i.T_CALLE, i.T_NUMERO_EXTERIOR, i.T_CODIGO_POSTAL,
                 i.T_DESCRIPCION, i.E_METROS_FRENTE, i.E_METROS_LARGO, t.T_TIPO_INMUEBLE 
                 FROM TA02_CAT_INMUEBLES AS i
                 INNER JOIN TA03_CAT_TIPO_INMUEBLES AS t ON i.TA03_REL_E_ID_TIPO_INMUEBLE = t.E_ID
                 WHERE i.T_MUNICIPIO = '".$T_ESTADO."' AND i.T_COLONIA = '".$T_COLONIA."' AND i.T_CONCEPTO = '".$T_CONCEPTO."' AND
                 i.F_PRECIO BETWEEN '$F_PRECIO_UNO' AND '$F_PRECIO_DOS' AND
                 i.E_METROS_FRENTE BETWEEN '$MTR_MIN_FRENTE' AND '$MTR_MAX_FRENTE' AND 
                 I.E_METROS_LARGO BETWEEN '$MTR_MIN_LARGO' AND '$MTR_MAX_LARGO'
                 ORDER BY i.E_ID DESC
                 LIMIT 15 ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function caracteristicasInmuebleByID($E_ID){
        $sql = " SELECT r.T_CANTIDAD, c.T_CARACTERISTICA FROM TA05_REL_CARACTERISTICAS_INMUEBLES AS r
                 INNER JOIN TA02_CAT_INMUEBLES AS i ON r.TA02_REL_E_ID_INMUEBLE = i.E_ID
                 INNER JOIN TA07_CAT_CARACTERISTICAS_INMUEBLES AS c ON r.TA07_REL_E_ID_PROPIEDADES = c.E_ID
                 WHERE r.TA02_REL_E_ID_INMUEBLE = ".$E_ID;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
}
?>
