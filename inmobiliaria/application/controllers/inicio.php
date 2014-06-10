<?php
class Inicio extends CI_Controller {

    //Este constructor es para agregar los modelos que este Controllera va a necesitar para evitar la llamada de los modelos desde otro script
    public function __construct() {
        parent::__construct();
        $this->load->model('inmuebles_model');
        $this->load->library('session');
        //$this->load->library('upload');
    }
    
    public function index(){
        $session = $this->session->userdata('webId');
        if(isset($session) && $session != null){
            $data['title'] = 'Administración';
            $content = $this->load->view('inicio/registrar_inmueble',$data,true);
            // se carga el Layout de la vista que se va a necesitar
            $this->load->view('site/LayoutGeneral', array('content' => $content));  
        } else {
            $this->load->view('error_page');
        }
    }
    
    public function agregarFotografia(){
        $session = $this->session->userdata('webId');
        if(isset($session) && $session != null){
            $data['title'] = 'Administración';
            $content = $this->load->view('inicio/agregarFotografia',$data,true);
            // se carga el Layout de la vista que se va a necesitar
            $this->load->view('site/LayoutGeneral', array('content' => $content));  
        } else {
            $this->load->view('error_page');
        }
    }

    public function verTipoInmuebles(){
        $inmuebles = $this->inmuebles_model->verTipoInmuebles();
        foreach($inmuebles as $val){
            $arr[] = $val;
        }
        echo json_encode($arr);
    }
    
    public function verPropietarios(){
        $propietarios = $this->inmuebles_model->verPropietarios();
        foreach($propietarios as $val){
            $arr[] = $val;
        }
        echo json_encode($arr);
    }
    
    public function verEstadosRepublica(){
        $estados = $this->inmuebles_model->verEstadosRepublica();
        foreach($estados as $val){
            $arr[] = $val;
        }
        echo json_encode($arr);
    }
    
    public function verCaracteristicasInmuebles(){
        $caracteristicas = $this->inmuebles_model->verCaracteristicasInmuebles();
        foreach($caracteristicas as $val){
            $arr[] = $val;
        }
        echo json_encode($arr);
    }
    
    public function insertarInmueble(){
        $sel_tipoInmueble = $this->input->post('sel_tipoInmueble');
        $sel_propietario = $this->input->post('sel_propietario');
        $sel_concepto = $this->input->post('sel_concepto');
        $inp_titutlo = $this->input->post('inp_titutlo');
        $inp_precio = $this->input->post('inp_precio');
        $sel_estado = $this->input->post('sel_estado');
        $inp_municipio = $this->input->post('inp_municipio');
        $inp_colonia = $this->input->post('inp_colonia');
        $inp_calle = $this->input->post('inp_calle');
        $inp_nExterior = $this->input->post('inp_nExterior');
        $inp_cp = $this->input->post('inp_cp');
        $txa_descripcion = $this->input->post('txa_descripcion');
        $T_LATITUD = $this->input->post('T_LATITUD');
        $T_LONGITUD = $this->input->post('T_LONGITUD');
        
        $insertInmueble = $this->inmuebles_model->insertarInmueble($sel_tipoInmueble, $sel_propietario, $sel_concepto, $inp_titutlo, $inp_precio, $sel_estado, $inp_municipio, $inp_colonia, $inp_calle, $inp_nExterior, $inp_cp, $txa_descripcion, $T_LATITUD, $T_LONGITUD);
        if($insertInmueble != null){
            echo $insertInmueble;
        } else {
            echo 'false';
        }
    }
    
    public function insertCaracteristicaInmueble(){
        $E_ID_INMUEBLE = $_POST['E_ID_INMUEBLE'];
        $arr = explode(",", $_POST["cadenaJSON"]);
        var_dump($arr);        
        foreach ($arr as $valor){
            $arrs = explode("-",$valor);
            $insertCaracteristicaInmueble = $this->inmuebles_model->insertCaracteristicaInmueble($E_ID_INMUEBLE, $arrs[0], $arrs[1]);
        }
        echo 'true';
    }
    
    public function verInmuebleTablaAgregarImagenes(){
        $inmuebles = $this->inmuebles_model->verInmuebleTablaAgregarImagenes();
        foreach($inmuebles as $val){
            $arr[] = $val;
        }
        echo json_encode($arr);
    }
    
    public function do_upload(){
        if (!empty($_FILES))
        {
            $extensionesPermitas = array("jpg", "jpeg", "gif", "png");
            $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if (in_array($ext, $extensionesPermitas) && ($_FILES["file"]["size"] < 512000)){
                $E_ID_INMUEBLE = $this->input->post('E_ID_INMUEBLE');
                $fileName = '/Users/hiramweb/Sites/inmobiliaria/application/assets/img/inmuebles/inmueble_'.$E_ID_INMUEBLE.'/'. $_FILES['file']['name'];
                if(file_exists($fileName)) {
                    chmod($fileName,0755); //Change the file permissions if allowed
                    unlink($fileName); //remove the file
                }
                $tempFile = $_FILES['file']['tmp_name'];
                $targetFile = '/Users/hiramweb/Sites/inmobiliaria/application/assets/img/inmuebles/inmueble_'.$E_ID_INMUEBLE.'/'. $_FILES['file']['name'];
                move_uploaded_file($tempFile, $targetFile);
                $buscarFoto = $this->inmuebles_model->buscarFoto($_FILES['file']['name'], $E_ID_INMUEBLE);
                if(count($buscarFoto)==0){
                    $this->inmuebles_model->guardarFotoInmueble($_FILES['file']['name'], $E_ID_INMUEBLE);
                }
            }
        }
    }
    
    public function crearDirectorioFotografiasInmueble(){
        $E_ID_INMUEBLE = $this->input->post('id');
        if (!file_exists(ROOT.'assets/img/inmuebles/inmueble_'.$E_ID_INMUEBLE.'')){
            mkdir(ROOT.'assets/img/inmuebles/inmueble_'.$E_ID_INMUEBLE.'', 0777);
        } else {
            echo 'La carpeta inmueble_'.$E_ID_INMUEBLE.' ya existe';
        }
    }
    
}
?>