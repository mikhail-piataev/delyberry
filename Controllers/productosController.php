<?php namespace Controllers;
	
	//usamos los modelos de las Clases producto  
	use Models\Producto as Producto;

	
	
	class productosController{

		private $producto;


		public function __construct(){
			$this->producto = new Producto();

		}

		public function index(){
			$datos = $this->producto->listar();
			return $datos;
		}

		public function agregar(){
			if(!$_POST){
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "productos" . DS . $nombre;
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

		public function editar($id){
			if(!$_POST){
				$this->producto->set("id", $id);
				$datos = $this->producto->view();
				return $datos;
			}else{
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "productos" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->producto->set("id", $_POST['id']);
					$this->producto->set("nombre", $_POST['nombre']);
					$this->producto->set("precio", $_POST['precio']);
					$this->producto->set("descripcion", $_POST['descripcion']);
					$this->producto->set("imagen", $nombre);
					$this->producto->edit();
					header("Location: " . URL . "productos");
				}
			}
		}

		public function ver($id){
			$this->producto->set("id",$id);
			$datos = $this->producto->view();
			return $datos;
		}

		public function eliminar($id){
			$this->producto->set("id",$id);
			$this->producto->delete();
			header("Location: " . URL . "productos");
		}
}
	$productos = new productosController();

?>
