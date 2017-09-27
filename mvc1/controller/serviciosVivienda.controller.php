<?php
require_once 'model/serviciosVivienda.php';

class ServiciosViviendaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ServiciosVivienda();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/serviciosVivienda/serviciosVivienda.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
       /* $serVivienda = new ServiciosVivienda();
        
        if(isset($_REQUEST['idServiciosVivienda'])){
            $serVivienda = $this->model->Obtener($_REQUEST['idServiciosVivienda']);
        }*/
        
        require_once 'view/header.php';
        //require_once 'view/serviciosVivienda/serviciosVivienda-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $serVivienda = new ServiciosVivienda();
        //Alumno();
        
        $serVivienda->idServiciosVivienda = $_REQUEST['idServiciosVivienda'];
        $serVivienda->viviendaAgua = $_REQUEST['viviendaAgua'];
        $serVivienda->viviendaDrenaje = $_REQUEST['viviendaDrenaje'];
        $serVivienda->viviendaElectricidad = $_REQUEST['viviendaElectricidad'];
        $serVivienda->viviendaGas = $_REQUEST['viviendaGas'];
        $serVivienda->viviendaElectricidad = $_REQUEST['viviendaInternet'];
        $serVivienda->viviendaTelefono= $_REQUEST['viviendaTelefono'];

        $serVivienda->idServiciosVivienda > 0 
            ? $this->model->Actualizar($serVivienda)
            : $this->model->Registrar($serVivienda);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idServiciosVivienda']);
        header('Location: index.php');
    }
}