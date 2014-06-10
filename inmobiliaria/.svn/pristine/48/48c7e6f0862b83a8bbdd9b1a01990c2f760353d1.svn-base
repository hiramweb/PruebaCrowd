<?php

class Catalogos_model extends CI_Model {
    //LOS MODELOS NO TIENEN MAS QUE FUNCIONES QUE SIRVEN PARA HACER TRANSACCIONES A LA BASE DE DATOS
    public function __construct()
    {
        $this->load->database();
    }

    //-----------------------------Inicio Metodos para la tabla Usuario ------------------------------------//
    public function usuarios($pag,$FormOption,Usuario $usuario)//OBTIENE EL LISTADO DE REGISTROS DE LA TABLA DE DISPOSITIVOS
    {
        if ($pag !=0){
            $lf = $pag*10;
            $li = $lf -10;
            $pag = " LIMIT ".$li.",".$lf;
        }else{
            $pag='';
        }
        if ($FormOption == "R"){
            $where = $usuario->Where();
            $sql = " SELECT * FROM TA01_CAT_USUARIOS ".$where.$pag; 
        }else{
            $sql = " SELECT * FROM TA01_CAT_USUARIOS".$pag; 
        }
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function cantidadUsuarios()//OBTIENE EL LISTADO DE REGISTROS DE LA TABLA DE DISPOSITIVOS
    {
        return $this->db->count_all_results('TA01_CAT_USUARIOS');
    }
    
    public function crearUsuario($usuario) 
    {
        
        if ($this->existeUsuario($usuario) == false){
            $sql = " INSERT INTO TA01_CAT_USUARIOS (T_NOMBRE, T_APELLIDOS, T_TELEFONO, T_CELULAR, T_DOMICILIO, T_COLONIA, T_USUARIO, T_PASSWORD, T_EMAIL, T_FACEBOOK, T_TWITTER, T_INFORMACION, T_TIPO_TRABAJADOR)";
            $sql.= " VALUES ('$usuario->T_NOMBRE','$usuario->T_APELLIDOS','".$usuario->T_TELEFONO."','".$usuario->T_CELULAR."', '".$usuario->T_DOMICILIO."', '$usuario->T_COLONIA', '".$usuario->T_USUARIO."', '".$usuario->T_PASSWORD."', '".$usuario->T_EMAIL."', '".$usuario->T_FACEBOOK."', '".$usuario->T_TWITTER."', '".$usuario->T_INFORMACION."', '".$usuario->T_TIPO_TRABAJADOR."') ";
            $query = $this->db->query($sql);
            return $this->db->insert_id();
        }else{
            return 0;
        }
    }
    public function editarUsuario($usuario) 
    {
        
        if ($this->existeUsuario($usuario) == false){
            $sql = " INSERT INTO TA01_CAT_USUARIOS (T_NOMBRE, T_APELLIDOS, T_TELEFONO, T_CELULAR, T_DOMICILIO, T_COLONIA, T_USUARIO, T_PASSWORD, T_EMAIL, T_FACEBOOK, T_TWITTER, T_INFORMACION, T_TIPO_TRABAJADOR)";
            $sql.= " VALUES ('$usuario->T_NOMBRE','$usuario->T_APELLIDOS','".$usuario->T_TELEFONO."','".$usuario->T_CELULAR."', '".$usuario->T_DOMICILIO."', '$usuario->T_COLONIA', '".$usuario->T_USUARIO."', '".$usuario->T_PASSWORD."', '".$usuario->T_EMAIL."', '".$usuario->T_FACEBOOK."', '".$usuario->T_TWITTER."', '".$usuario->T_INFORMACION."', '".$usuario->T_TIPO_TRABAJADOR."') ";
            $query = $this->db->query($sql);
            return $this->db->insert_id();
        }else{
            return 0;
        }
    }
    
     public function eliminarUsuario($id) 
    {        
        $this->db->where('E_ID', $id);
        $this->db->delete('TA01_CAT_USUARIOS'); 
        return $this->db->affected_rows();
    }
    
    public function existeUsuario($usuario) 
    {
        $updateCondition = '';
        if ($usuario->E_ID != 0){
            $updateCondition = ' AND E_ID!='.$usuario->E_ID;
        }
        $sql = "SELECT * FROM TA01_CAT_USUARIOS WHERE T_EMAIL ='$usuario->T_EMAIL' OR T_USUARIO='$usuario->T_USUARIO'".$updateCondition; 
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0){
            return false;
        }else{
            return true;
        }
        
    }
    
    public function guardarImagenDePerfil($img) 
    {
        //var_dump($img);
        $sql = "UPDATE TA01_CAT_USUARIOS SET T_RUTA_IMAGEN = '$img->T_NOMBRE' WHERE E_ID ='$img->E_ID'"; 
        $this->db->query($sql);
        if ($this->db->affected_rows() == 0){
            return false;
        }else{
            return true;
        }
        
    }
    
    //-----------------------------Fin Metodos para la tabla Usuario ------------------------------------//
    //
    //
    //-----------------------------Inicio Metodos para la tabla Usuario ------------------------------------//
    
    public function tipoInmuebles($FormOption,TipoInmueble $tipoInmueble)//OBTIENE EL LISTADO DE REGISTROS DE LA TABLA DE DISPOSITIVOS
    {

        if ($FormOption == "R"){
            $where = $tipoInmueble->Where();
            $sql = " SELECT * FROM TA03_CAT_TIPO_INMUEBLES ".$where; 
        }else if ($FormOption == "RA"){
            $sql = " SELECT * FROM TA03_CAT_TIPO_INMUEBLES"; 
        }
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    
    public function EliminarTipoInmuebles(TipoInmueble $tipoInmueble)//OBTIENE EL LISTADO DE REGISTROS DE LA TABLA DE DISPOSITIVOS
    {
        $this->db->where('E_ID', $tipoInmueble->E_ID);
        $this->db->delete('TA03_CAT_TIPO_INMUEBLES'); 
        return $this->db->affected_rows();
    }
    
    public function crearTipoInmueble(TipoInmueble $tipoInmueble) 
    {
        
        if ($this->existeTipoInmueble($tipoInmueble) == false){
            $sql = " INSERT INTO TA03_CAT_TIPO_INMUEBLES (T_TIPO_INMUEBLE)";
            $sql.= " VALUES ('$tipoInmueble->T_TIPO_INMUEBLE') ";
            $query = $this->db->query($sql);
            return $this->db->insert_id();
        }else{
            return 0;
        }
    }
    
    
    public function existeTipoInmueble(TipoInmueble $tipoInmueble) 
    {
        $updateCondition = '';
        if ($tipoInmueble->E_ID != 0){
            $updateCondition = ' AND E_ID!='.$tipoInmueble->E_ID;
        }
        $sql = "SELECT * FROM TA03_CAT_TIPO_INMUEBLES WHERE T_TIPO_INMUEBLE ='$tipoInmueble->T_TIPO_INMUEBLE' ".$updateCondition; 
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0){
            return false;
        }else{
            return true;
        }
        
    }
    
    //-----------------------------Fin Metodos para la tabla TipoInmueble ------------------------------------//
        //
    //
    //-----------------------------Inicio Metodos para la tabla Propietario ------------------------------------//
    
    public function propietarios($FormOption,Propietario $propietario)//OBTIENE EL LISTADO DE REGISTROS DE LA TABLA DE DISPOSITIVOS
    {

        if ($FormOption == "R"){
            $where = $tipoInmueble->Where();
            $sql = " SELECT * FROM TA04_CAT_PROPIETARIOS ".$where; 
        }else if ($FormOption == "RA"){
            $sql = " SELECT * FROM TA04_CAT_PROPIETARIOS"; 
        }
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    
    public function EliminarPropietario(Propietario $propietario)//OBTIENE EL LISTADO DE REGISTROS DE LA TABLA DE DISPOSITIVOS
    {
        $this->db->where('E_ID', $propietario->E_ID);
        $this->db->delete('TA04_CAT_PROPIETARIOS'); 
        return $this->db->affected_rows();
    }
    
    public function CrearPropietario(Propietario $propietario) 
    {
        
        if ($this->existePropietario($propietario) == false){
            $sql = " INSERT INTO TA04_CAT_PROPIETARIOS (T_NOMBRE,T_APELLIDOS,T_ESTADO,T_MUNICIPIO,T_COLONIA,T_CALLE,T_NUMERO_EXTERIOR,T_TELEFONO,T_CELULAR,T_EMPRESA,T_EMAIL)";
            $sql.= " VALUES ('$propietario->T_NOMBRE','$propietario->T_APELLIDOS','$propietario->T_ESTADO','$propietario->T_MUNICIPIO','$propietario->T_COLONIA','$propietario->T_CALLE','$propietario->T_NUMERO_EXTERIOR','$propietario->T_TELEFONO','$propietario->T_CELULAR','$propietario->T_EMPRESA','$propietario->T_EMAIL') ";
            $query = $this->db->query($sql);
            return $this->db->insert_id();
        }else{
            return 0;
        }
    }
    
    
    public function existePropietario(Propietario $propietario) 
    {
        $updateCondition = '';
        if ($tipoInmueble->E_ID != 0){
            $updateCondition = ' AND E_ID!='.$propietario->E_ID;
        }
        $sql = "SELECT * FROM TA04_CAT_PROPIETARIOS WHERE T_NOMBRE ='$propietario->T_NOMBRE' AND T_APELLIDOS ='$propietario->T_APELLIDOS' ".$updateCondition; 
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0){
            return false;
        }else{
            return true;
        }
        
    }
    
    //-----------------------------Fin Metodos para la tabla TipoInmueble ------------------------------------//
}


class Usuario {
    public $T_NOMBRE = ""; 
    public $T_APELLIDOS  = ""; 
    public $T_TELEFONO = ""; 
    public $T_CELULAR  = ""; 
    public $T_DOMICILIO = ""; 
    public $T_COLONIA  = ""; 
    public $T_USUARIO = ""; 
    public $T_PASSWORD = ""; 
    public $T_EMAIL  = ""; 
    public $T_FACEBOOK  = ""; 
    public $T_TWITTER  = ""; 
    public $T_INFORMACION  = ""; 
    public $T_TIPO_TRABAJADOR  = ""; 
    public $E_ID = 0;
    
    function Where() 
   {
        $where = null;
        $where = $this->T_NOMBRE != "" ? " WHERE T_NOMBRE='" . $this->T_NOMBRE . "'" : null;
        
        if ($where == null) {
            if (strlen($this->T_APELLIDOS) != 0) {$where.=" WHERE T_APELLIDOS='" . $this->T_APELLIDOS . "'"; }
        } else {
            if (strlen($this->T_USUARIO) != 0) { $where.=" OR T_APELLIDOS='" . $this->T_APELLIDOS . "'";}
        }
        if ($where == null) {
            if (strlen($this->T_TELEFONO) != 0) {$where.=" WHERE T_TELEFONO LIKE '" . $this->T_TELEFONO . "'"; }
        } else {
            if (strlen($this->T_TELEFONO) != 0) { $where.=" OR T_TELEFONO LIKE '" . $this->T_TELEFONO . "'";}
        }
        if ($where == null) {
            if (strlen($this->T_CELULAR) != 0) {$where.=" WHERE T_CELULAR LIKE '" . $this->T_CELULAR . "'"; }
        } else {
            if (strlen($this->T_CELULAR) != 0) { $where.=" OR T_CELULAR LIKE'" . $this->T_CELULAR . "'";}
        }
        if ($where == null) {
            if (strlen($this->T_USUARIO) != 0) { $where.=" WHERE T_USUARIO LIKE '" . $this->T_USUARIO . "'";}
        } else {
            if (strlen($this->T_USUARIO) != 0) {$where.=" OR T_USUARIO LIKE '" . $this->T_USUARIO . "'"; }
        }
        if ($where == null) {
            if (strlen($this->T_EMAIL) != 0) { $where.=" WHERE T_EMAIL LIKE '" . $this->T_EMAIL . "'";}
        } else {
            if (strlen($this->T_EMAIL) != 0) {$where.=" OR T_EMAIL LIKE '" . $this->T_EMAIL . "'"; }
        }
        if ($where == null) {
            if (strlen($this->T_TIPO_TRABAJADOR) != 0) { $where.=" WHERE T_TIPO_TRABAJADOR ='" . $this->T_TIPO_TRABAJADOR . "'";}
        } else {
            if (strlen($this->T_TIPO_TRABAJADOR) != 0) {$where.=" OR T_TIPO_TRABAJADOR ='" . $this->T_TIPO_TRABAJADOR . "'"; }
        }
        //var_dump($where);
        return $where;
   }
    
}


class TipoInmueble {
    public $T_TIPO_INMUEBLE = ""; 
    public $E_ID = 0;
    
    function Where() 
   {
        $where = null;
        $where = $this->T_TIPO_INMUEBLE != "" ? " WHERE T_TIPO_INMUEBLE='" . $this->T_TIPO_INMUEBLE . "'" : null;
        //var_dump($where);
        return $where;
   }
    
}


class Img {
    public $T_NOMBRE = ""; 
    public $E_ID  = 0; 
}


class Propietario {
    public $T_NOMBRE = ""; 
    public $T_APELLIDOS  = ""; 
    public $T_TELEFONO = ""; 
    public $T_CELULAR  = ""; 
    public $T_COLONIA  = ""; 
    public $T_CALLE  = ""; 
    public $T_EMAIL  = ""; 
    public $T_ESTADO  = ""; 
    public $T_MUNICIPIO  = ""; 
    public $T_NUMERO_EXTERIOR = "";
    public $T_EMPRESA = "";
    public $E_ID = 0;
    
    function Where() 
   {
        $where = null;
        $where = $this->T_NOMBRE != "" ? " WHERE T_NOMBRE='" . $this->T_NOMBRE . "'" : null;
        
        if ($where == null) {
            if (strlen($this->T_APELLIDOS) != 0) {$where.=" WHERE T_APELLIDOS='" . $this->T_APELLIDOS . "'"; }
        } else {
            if (strlen($this->T_USUARIO) != 0) { $where.=" OR T_APELLIDOS='" . $this->T_APELLIDOS . "'";}
        }
        if ($where == null) {
            if (strlen($this->T_TELEFONO) != 0) {$where.=" WHERE T_TELEFONO LIKE '" . $this->T_TELEFONO . "'"; }
        } else {
            if (strlen($this->T_TELEFONO) != 0) { $where.=" OR T_TELEFONO LIKE '" . $this->T_TELEFONO . "'";}
        }
        if ($where == null) {
            if (strlen($this->T_CELULAR) != 0) {$where.=" WHERE T_CELULAR LIKE '" . $this->T_CELULAR . "'"; }
        } else {
            if (strlen($this->T_CELULAR) != 0) { $where.=" OR T_CELULAR LIKE'" . $this->T_CELULAR . "'";}
        }
        if ($where == null) {
            if (strlen($this->T_USUARIO) != 0) { $where.=" WHERE T_COLONIA LIKE '" . $this->T_USUARIO . "'";}
        } else {
            if (strlen($this->T_USUARIO) != 0) {$where.=" OR T_COLONIA LIKE '" . $this->T_USUARIO . "'"; }
        }
        if ($where == null) {
            if (strlen($this->T_EMAIL) != 0) { $where.=" WHERE T_EMAIL LIKE '" . $this->T_EMAIL . "'";}
        } else {
            if (strlen($this->T_EMAIL) != 0) {$where.=" OR T_EMAIL LIKE '" . $this->T_EMAIL . "'"; }
        }
        if ($where == null) {
            if (strlen($this->T_TIPO_TRABAJADOR) != 0) { $where.=" WHERE T_CALLE ='" . $this->T_TIPO_TRABAJADOR . "'";}
        } else {
            if (strlen($this->T_TIPO_TRABAJADOR) != 0) {$where.=" OR T_CALLE ='" . $this->T_TIPO_TRABAJADOR . "'"; }
        }
        if ($where == null) {
            if (strlen($this->T_ESTADO) != 0) { $where.=" WHERE T_ESTADO LIKE '" . $this->T_ESTADO . "'";}
        } else {
            if (strlen($this->T_ESTADO) != 0) {$where.=" OR T_ESTADO LIKE '" . $this->T_ESTADO . "'"; }
        }
        if ($where == null) {
            if (strlen($this->T_MUNICIPIO) != 0) { $where.=" WHERE T_MUNICIPIO ='" . $this->T_MUNICIPIO . "'";}
        } else {
            if (strlen($this->T_MUNICIPIO) != 0) {$where.=" OR T_MUNICIPIO ='" . $this->T_MUNICIPIO . "'"; }
        }
         if ($where == null) {
            if (strlen($this->T_EMPRESA) != 0) { $where.=" WHERE T_EMPRESA ='" . $this->T_EMPRESA . "'";}
        } else {
            if (strlen($this->T_EMPRESA) != 0) {$where.=" OR T_EMPRESA ='" . $this->T_EMPRESA . "'"; }
        }
        
        
        
        //var_dump($where);
        return $where;
   }
    
}






?>
