<?php
class Catalogos extends CI_Controller {

    //Este constructor es para agregar los modelos que este Controllera va a necesitar para evitar la llamada de los modelos desde otro script
    public function __construct() {
        parent::__construct();
        
        $session = $this->session->userdata('webId');
        if(!isset($session) && $session == null){
            $this->load->view('error_page');
        }else{
            $this->load->model('catalogos_model');
            $this->load->library('session');
        }
    }
    
    
    public function usuarios(){
        if(isset($_REQUEST['pag'])){
            $_REQUEST['pag'] = mysql_real_escape_string($_REQUEST['pag']);
            if (!is_numeric($_REQUEST['pag'])){
                $_REQUEST['pag'] = 1;
            }
        }else{
            $_REQUEST['pag'] = 1;
        }
        $usuario = new Usuario();
       
        if (isset($_REQUEST['FormOption']) && $_REQUEST['FormOption'] == "R"){
            $usuario->T_NOMBRE = isset($_REQUEST['nombre']) ? mysql_real_escape_string($_REQUEST['nombre']): "";
            $usuario->T_APELLIDOS = isset($_REQUEST['apellidos']) ? mysql_real_escape_string($_REQUEST['apellidos']): "";
            $usuario->T_TELEFONO = isset($_REQUEST['telefono']) ? mysql_real_escape_string($_REQUEST['telefono']): "";
            $usuario->T_CELULAR = isset($_REQUEST['celular']) ? mysql_real_escape_string($_REQUEST['celular']): "";
            $usuario->T_USUARIO = isset($_REQUEST['usuario']) ? mysql_real_escape_string($_REQUEST['usuario']): "";
            $usuario->T_EMAIL = isset($_REQUEST['email']) ? mysql_real_escape_string($_REQUEST['email']): "";
            $usuario->T_TIPO_TRABAJADOR = isset($_POST['tipo_trabajador']) ? mysql_real_escape_string($_REQUEST['tipo_trabajador']):"";
        }else{
            $_REQUEST['FormOption'] = "RA";
        }
        //var_dump($usuario->T_CELULAR);
        $data['title'] = 'Control de Usuarios';
        $data['usuarios'] = $this->catalogos_model->usuarios($_REQUEST['pag'],$_REQUEST['FormOption'],$usuario);
        $data['cantidad'] = $this->catalogos_model->cantidadUsuarios();
        $data['cantidad'] = ceil(($data['cantidad']/10));
        $content = $this->load->view('catalogos/usuarios',$data,true);
        // se carga el Layout de la vista que se va a necesitar
        $this->load->view('site/LayoutGeneral', array('content' => $content));  
       
    }
    
    public function OpcionesUsuario() {
        if (isset($_POST['FormOption'])) {
            $_POST['FormOption'] = mysql_real_escape_string($_POST['FormOption']);

            if ($_POST['FormOption'] != "D") {
                $usuario = new Usuario();
                $usuario->E_ID = mysql_real_escape_string($_POST['E_ID']);
                $usuario->T_NOMBRE = mysql_real_escape_string($_POST['T_NOMBRE']);
                $usuario->T_APELLIDOS = mysql_real_escape_string($_POST['T_APELLIDOS']);
                $usuario->T_TELEFONO = mysql_real_escape_string($_POST['T_TELEFONO']);
                $usuario->T_CELULAR = mysql_real_escape_string($_POST['T_CELULAR']);
                $usuario->T_DOMICILIO = mysql_real_escape_string($_POST['T_DOMICILIO']);
                $usuario->T_COLONIA = mysql_real_escape_string($_POST['T_COLONIA']);
                $usuario->T_USUARIO = mysql_real_escape_string($_POST['T_USUARIO']);
                $usuario->T_PASSWORD = mysql_real_escape_string($_POST['T_PASSWORD']);
                $usuario->T_EMAIL = mysql_real_escape_string($_POST['T_EMAIL']);
                $usuario->T_FACEBOOK = mysql_real_escape_string($_POST['T_FACEBOOK']);
                $usuario->T_TWITTER = mysql_real_escape_string($_POST['T_TWITTER']);
                $usuario->T_INFORMACION = mysql_real_escape_string($_POST['T_INFORMACION']);
                $usuario->T_TIPO_TRABAJADOR = mysql_real_escape_string($_POST['T_TIPO_TRABAJADOR']);
                if ($_POST['FormOption'] != "C") {
                    $id = $this->catalogos_model->crearUsuario($usuario);
                } else if ($_POST['FormOption'] != "E") {
                    $id = $this->catalogos_model->editarUsuario($usuario);
                }
            } else {
                $id = $this->catalogos_model->eliminarUsuario(mysql_real_escape_string($_POST['E_ID']));
            }
            echo $id;
        } else {
            echo "error";
        }
    }
    
    public function guardarImagenDePerfil() 
    {
        if (!empty($_FILES))
        {
            //var_dump($_FILES);
            $_POST['E_ID_IMAGE'] = mysql_real_escape_string($_POST['E_ID_IMAGE']);
            //var_dump($_POST['E_ID_IMAGE']);
            $extensionesPermitas = array("jpg", "jpeg", "gif", "png");
            $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if (in_array($ext, $extensionesPermitas) &&  ($_FILES["file"]["size"] < 512000)){
                $fileName = ROOT . 'personal/' . $_POST['E_ID_IMAGE'].'.'.$ext;
                if(file_exists($fileName)) {
                    chmod($fileName,0755); 
                    unlink($fileName); 
                }
                $tempFile = $_FILES['file']['tmp_name'];
                $targetFile = ROOT . 'personal/' . $_POST['E_ID_IMAGE'].'.'.$ext;
                //var_dump($targetFile);
                move_uploaded_file($tempFile, $targetFile);
                $img = new Img();
                $img->E_ID = $_POST['E_ID_IMAGE'];
                $img->T_NOMBRE = $_POST['E_ID_IMAGE'].'.'.$ext;
                $imagenGuardada = $this->catalogos_model->guardarImagenDePerfil($img);
                //var_dump($imagenGuardada);
            }else{
                echo false;
            }
        }else{
            echo false;
        }
        
    }
    
    public function OpcionesTipoInmueble() {

        if (isset($_POST['FormOption'])) {
            $_POST['FormOption'] = mysql_real_escape_string($_POST['FormOption']); //RA = READ ALL
            
            $tipoInmueble = new TipoInmueble();
            $tipoInmueble->T_TIPO_INMUEBLE = isset($_POST['T_TIPO_INMUEBLE']) ? mysql_real_escape_string($_POST['T_TIPO_INMUEBLE']):"";
            $tipoInmueble->E_ID = isset($_POST['E_ID']) ? mysql_real_escape_string($_POST['E_ID']):""; 
            if ($_POST['FormOption'] == "C"){
                $response = $this->catalogos_model->CrearTipoInmueble($tipoInmueble);
            }
            else if ($_POST['FormOption'] == "R" || $_POST['FormOption'] == "RA"){
                $response = $this->catalogos_model->tipoInmuebles($_POST['FormOption'],$tipoInmueble);
            }
            else if ($_POST['FormOption'] == "D"){
                $response = $this->catalogos_model->EliminarTipoInmuebles($tipoInmueble);
            }
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
    
    
    
        public function OpcionesPropietario() {

        if (isset($_POST['FormOption'])) {
            $_POST['FormOption'] = mysql_real_escape_string($_POST['FormOption']); //RA = READ ALL

            $propietario = new Propietario();
            $propietario->T_NOMBRE = isset($_POST['T_NOMBRE']) ? mysql_real_escape_string($_POST['T_NOMBRE']) : "";
            $propietario->E_ID = isset($_POST['E_ID']) ? mysql_real_escape_string($_POST['E_ID']) : "";
            $propietario->T_APELLIDOS = isset($_POST['T_APELLIDOS']) ? mysql_real_escape_string($_POST['T_APELLIDOS']) : "";
            $propietario->T_ESTADO = isset($_POST['T_ESTADO']) ? mysql_real_escape_string($_POST['T_ESTADO']) : "";
            $propietario->T_MUNICIPIO = isset($_POST['T_MUNICIPIO']) ? mysql_real_escape_string($_POST['T_MUNICIPIO']) : "";
            $propietario->T_COLONIA = isset($_POST['T_COLONIA']) ? mysql_real_escape_string($_POST['T_COLONIA']) : "";
            $propietario->T_CALLE = isset($_POST['T_CALLE']) ? mysql_real_escape_string($_POST['T_CALLE']) : "";
            $propietario->T_TELEFONO = isset($_POST['T_TELEFONO']) ? mysql_real_escape_string($_POST['T_TELEFONO']) : "";
            $propietario->T_CELULAR = isset($_POST['T_CELULAR']) ? mysql_real_escape_string($_POST['T_CELULAR']) : "";
            $propietario->T_EMPRESA = isset($_POST['T_EMPRESA']) ? mysql_real_escape_string($_POST['T_EMPRESA']) : "";
            $propietario->T_EMAIL = isset($_POST['T_EMAIL']) ? mysql_real_escape_string($_POST['T_EMAIL']) : "";
            
            if ($_POST['FormOption'] == "C") {
                $response = $this->catalogos_model->ErearPropietario($propietario);
            } else if ($_POST['FormOption'] == "R" || $_POST['FormOption'] == "RA") {
                $response = $this->catalogos_model->propietarios($_POST['FormOption'], $propietario);
            } else if ($_POST['FormOption'] == "D") {
                $response = $this->catalogos_model->EliminarPropietario($propietario);
            }
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

}
?>
