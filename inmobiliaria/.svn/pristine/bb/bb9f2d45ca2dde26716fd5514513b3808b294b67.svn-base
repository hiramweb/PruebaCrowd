<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    //Este constructor es para agregar los modelos que este Controllera va a necesitar para evitar la llamada de los modelos desde otro script
    public function __construct() {
        parent::__construct();
        $this->load->model('account_model');
        $this->load->library('session');
    }
    
    //Funcion para ir al login del sistema
    public function index()
    {
        $this->load->view('login');
    }
    
    public function inicio()
    {
        $session = $this->session->userdata('webId');
        if(isset($session) && $session != null){
            $data['title'] = 'Administración';
            $content = $this->load->view('inicio/inicio',$data,true);
            // se carga el Layout de la vista que se va a necesitar
            $this->load->view('site/LayoutGeneral', array('content' => $content));  
        } else {
            $this->load->view('error_page');
        }
    }

    //Función para acceder al sistema
    public function acceder()
    {
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $data['datos'] = $this->account_model->usuarios($usuario, $password);
        if(count($data['datos']) > 0){
            foreach ($data['datos'] as $val){
                $this->session->set_userdata('webNombre',$val['T_NOMBRE']);
                $this->session->set_userdata('webApellidos',$val['T_APELLIDOS']);
                $this->session->set_userdata('webId',$val['E_ID']);
            }
            //$this->load->view('inicio');
            $this->inicio($this->session->userdata('webId'));
        } 
        else
        {
            $this->load->view('error_page');
        }
    }
    
    //Funcion para salir del sistema
    function salir()
    {
        $session = $this->session->userdata('webId');
        if(isset($session)){
            $this->session->unset_userdata('webNombre');
            $this->session->unset_userdata('webApellidos');
            $this->session->unset_userdata('webId');
            $this->session->sess_destroy();
            $val = 'true';
            echo $val;
        } else {
            $val = 'false';
            echo $val;
        }
    }
    
}