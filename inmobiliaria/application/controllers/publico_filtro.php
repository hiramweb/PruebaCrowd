<?php
class Publico_filtro extends CI_Controller {
    
    //Este constructor es para agregar los modelos que este Controllera va a necesitar para evitar la llamada de los modelos desde otro script
    public function __construct() {
        parent::__construct();
        $this->load->model('publico_filtro_model');
    }
    
    public function filtroInmuebles(){
        $T_MUNICIPIO = $this->input->post('T_MUNICIPIO');
        $T_COLONIA = $this->input->post('T_COLONIA');
        $F_PRECIO_MIN = $this->input->post('F_PRECIO_MIN');
        $F_PRECIO_MAX = $this->input->post('F_PRECIO_MAX');
        $T_CONCEPTO = $this->input->post('checkbox');
        $T_METROS_FRENTE = $this->input->post('T_METROS_FRENTE');
        $T_METROS_LARGO = $this->input->post('T_METROS_LARGO');

        if($T_CONCEPTO === "Renta"){
            $CHECKBOX = "Renta";
        } else {
            $CHECKBOX = "Venta";
        }

        if($T_METROS_FRENTE){
            $MTR_MIN_FRENTE = $T_METROS_FRENTE -10;
            $MTR_MAX_FRENTE = $T_METROS_FRENTE +10;
        }

        if($T_METROS_LARGO){
            $MTR_MIN_LARGO = $T_METROS_LARGO -10;
            $MTR_MAX_LARGO = $T_METROS_LARGO +10;
        }

        $filtroInmuebles = $this->publico_filtro_model->filtroInmuebles($T_MUNICIPIO, $T_COLONIA, $CHECKBOX, $F_PRECIO_MIN, $F_PRECIO_MAX, $MTR_MIN_FRENTE, $MTR_MAX_FRENTE, $MTR_MIN_LARGO, $MTR_MAX_LARGO);

        foreach($filtroInmuebles as $val){
            $caracteristicas[] = $this->publico_filtro_model->caracteristicasInmuebleByID($val['E_ID']);
        }
        
        $data['filtroInmuebles'] = $filtroInmuebles;
        $data['caracteristicas'] = $caracteristicas;
        $data['title'] = 'Inmobiliaria';

        $publicContent = $this->load->view('public_filter/index', $data, true); 
        $this->load->view('public_Site/layout', array('publicContent' => $publicContent));
    }
    
}
?>