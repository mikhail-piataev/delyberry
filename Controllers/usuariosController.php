<?php namespace Controllers;
	
	//usamos los modelos de la clase Usuario 
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
					$this->usuario->set("login", $_POST['login']);
					$this->usuario->set("password", $_POST['password']);
					$this->usuario->set("email", $_POST['email']);
					$this->usuario->set("role_usuario", $_POST['role_usuario']);
					$this->usuario->set("nombre", $_POST['nombre']);
					$this->usuario->set("apellido", $_POST['apellido']);
					$this->usuario->set("imagen", $nombre);
					$this->usuario->add();
					header("Location: " . URL . "usuarios");
		}
		}

		public function editar($id_usuario){
			if(!$_POST){
				$this->usuario->set("id_usuario", $id_usuario);
				$datos = $this->usuario->view();
				return $datos;
			}else{
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

		public function ver($id_usuario){
			$this->usuario->set("id_usuario",$id_usuario);
			$datos = $this->usuario->view();
			return $datos;
		}

		public function eliminar($id_usuario){
			$this->usuario->set("id_usuario",$id_usuario);
			$this->usuario->delete();
			header("Location: " . URL . "usuarios");
		}
}
	$usuarios = new usuariosController();

?>
