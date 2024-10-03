<?php namespace Controllers;

    //llamamos a  "productos" que esta en "Models"
    use Models\Producto as Producto;

    class productosController{

        private $producto;

        public function __construct(){
            $this->producto = new Producto();
        }

        //lamado a la funcion "listar" de modelo
        public function index(){
            $datos = $this->producto->listar();
            return $datos;
        }

        //agregar
        public function agregar(){
            if(!$_POST){
                $datos = $this->seccion->listar();
                return $datos;
            }else{
                //me aseguro que solo se suban este tipo de archivos
                $permitidos = array("image/jpeg","image/png","image/gif","image/jpg");
                $limite = 700;
                if(in_array($_FILES['imagen']['type'], $permitidos && $_FILES['imagen']['size'] <= $limite * 1024)){
                    $nombre = date('is') . $_FILES['imagen']['name'];
                    $ruta = "Views" . DS . "_template" . DS . "imagenes" . DS . "productos" . DS . $nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    $this->producto->set("nombre", $_POST['nombre']);
                    $this->producto->set("precio", $_POST['precio']);
                    $this->producto->set("descripcion", $_POST['descripcion']);
                    $this->producto->set("imagen", $nombre);
                    $this->producto->add();
                    header("Location: " . URL . "productos");
                }
            }
        }
        
        //editar
        public function editar($id){
          if(!$_POST){
            $this->producto->set("id", $id);
            $datos = $this->producto->view();
            return $datos;
          }else{
            $this->producto->set("id", $_POST['id']);
            $this->producto->set("nombre", $_POST['nombre']);
            $this->producto->set("precio", $_POST['precio']);
            $this->producto->set("descripcion", $_POST['descripcion']);
            $this->producto->set("imagen", $_POST['imagen']);
            $this->producto->edit();
            header("Location: " . URL . "productos");
          }
        }

        //listar productos
        public function listarProductos(){
          $datos = $this->producto->listar();
          return $datos;
        }

        //ver de a un producto
        public function ver($id){
          $this->producto->set("id",$id);
          $datos = $this->producto->view();
          return $datos;
        }

        //eliminar estudiante
        public function eliminar($id){
          $this->producto->set("id",$id);
          $this->producto->delete();
          header("Location: " . URL . "productos");
        }
    }
    
    $productos = new productosController();

?>
