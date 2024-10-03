<?php namespace Controllers;

    //llamamos a  "seccion" que esta en "Models"
    use Models\Seccion as Seccion;

    class seccionesController{
        
        private $secciones;

        public function __construct(){
            $this->secciones = new Seccion();
        }

        //lamado a la funcion "listar" de modelo
        public function index(){
            $datos = $this->secciones->listar();
            return $datos;
        }

        //agregar
        public function agregar(){
            if($_POST){
                $this->secciones->set("nombre",$_POST['nombre']);
                $this->secciones->add();
                header("Location: " . URL . "secciones" );
            }
        }

        //editar
        public function editar($id){
            if($_POST){
                $this->secciones->set("id",$_POST['id']);
                $this->secciones->set("nombre",$_POST['nombre']);
                $this->secciones->edit();
                header("Location: " . URL . "secciones" );
            }else{
                $this->secciones->set("id",$id);
                $datos = $this->secciones->view();
                return $datos;
            }
        }
        
        //eliminar
        public function eliminar($id) {
            $this->secciones->set("id",$id);
            $this->secciones->delete();
            header("Location: " . URL . "secciones" );
        }
    }

?>
