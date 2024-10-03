<?php namespace Controllers;

    //llamamos a  "seccion" y "estudiantes" que esta en "Models"
    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;

    class estudiantesController{

        private $estudiante;
        private $secciones;

        public function __construct(){
            $this->estudiante = new Estudiante();
            $this->secciones = new Seccion();
        }

        //lamado a la funcion "listar" de modelo
        public function index(){
            $datos = $this->estudiante->listar();
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
                if(in_array($_FILES['imagen']['type'], $permitidos && $_FILES['imagen']['size'] <= $limite * 1024 )){
                    $nombre = date('is') . $_FILES['imagen']['name'];
                    $ruta = "Views" . DS . "_template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
                    $this->estudiante->set("nombre",$_POST['nombre']);
                    $this->estudiante->set("edad",$_POST['edad']);
                    $this->estudiante->set("promedio",$_POST['promedio']);
                    $this->estudiante->set("imagen",$nombre);
                    $this->estudiante->set("id_seccion",$_post['id_seccion']);
                    $this->estudiante->add();
                    header("Location: " . URL . "estudiantes");

                }
            }

        }
         //editar
        public function editar($id){
			if(!$_POST){
				$this->estudiante->set("id", $id);
				$datos = $this->estudiante->view();
				return $datos;
			}else{
				$this->estudiante->set("id", $_POST['id']);
				$this->estudiante->set("nombre", $_POST['nombre']);
				$this->estudiante->set("edad", $_POST['edad']);
				$this->estudiante->set("promedio", $_POST['promedio']);
				$this->estudiante->set("id_seccion", $_POST['id_seccion']);
				$this->estudiante->edit();
				header("Location: " . URL . "estudiantes");
			}
		}

        //listar estudiantes
		public function listarSecciones(){
			$datos = $this->seccion->listar();
			return $datos;
		}

        //ver de a un estudiante
		public function ver($id){
			$this->estudiante->set("id",$id);
			$datos = $this->estudiante->view();
			return $datos;
		}

        //eliminar estudiante
		public function eliminar($id){
			$this->estudiante->set("id",$id);
			$this->estudiante->delete();
			header("Location: " . URL . "estudiantes");
		}
    }
    
    $estudiantes = new estudiantesController();

?>
