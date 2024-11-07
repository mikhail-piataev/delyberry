<?php namespace Controllers;
	
	
	use Models\Usuario as Usuario;

	
	
	class usuariosController{

		private $usuario;


		public function __construct(){
			$this->usuario = new Usuario();

		}

		public function index(){
			$datos = $this->usuario->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "usuarios" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->usuario->set("id_usuario", $_POST['id_usuario']);
					$this->usuario->set("login", $_POST['login']);
					$this->usuario->set("password", $_POST['password']);
                    $this->usuario->set("imagen", $nombre);
					$this->usuario->add();
					header("Location: " . URL . "usuarios");
				}
			}
		}

		public function editar($id){
			if(!$_POST){
				$this->usuario->set("id", $id);
				$datos = $this->usuario->view();
				return $datos;
			}else{
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "usuarios" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->usuario->set("id_usuario", $_POST['id_usuario']);
					$this->usuario->set("login", $_POST['login']);
					$this->usuario->set("password", $_POST['password']);
					$this->usuario->set("email", $_POST['email']);
                    $this->usuario->set("role_usuario", $_POST['role_usuario']);
                    $this->usuario->set("nombre", $_POST['nombre']);
                    $this->usuario->set("apellido", $_POST['apellido']);
					$this->usuario->set("imagen", $nombre);
					$this->usuario->edit();
					header("Location: " . URL . "usuarios");
				}
			}
		}

		public function ver($id){
			$this->usuario->set("id",$id);
			$datos = $this->usuario->view();
			return $datos;
		}

		public function eliminar($id){
			$this->usuario->set("id",$id);
			$this->usuario->delete();
			header("Location: " . URL . "usuarios");
		}
}
	$usuarios = new usuariosController();

?>
