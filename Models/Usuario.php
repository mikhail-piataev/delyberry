<?php namespace Models;

	class Usuario{

		//creamos las variables para guardar los valores de la base de datos
		private $id_usuario;
		private $login;
		private $password;
        private $email;
		private $role_usuario;
        private $nombre;
        private $apellido;
		private $imagen;
	
		//creamos una variable para la conexión		
		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT * FROM usuarios";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO usuarios (id_usuario, login, password, email, role_usuario, nombre, apellido, imagen)
					VALUES (null, '{$this->login}', '{$this->password}', '{$this->email}', '{$this->role_usuario}', '{$this->nombre}', '{$this->apellido}', '{$this->imagen}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM usuarios WHERE id = '{$this->id_usuario}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE usuarios SET 
				login = '{$this->login}', 
				password = '{$this->password}', 
				email = '{$this->email}', 
                role_usuario = '{$this->role_usuario}',
				imagen = '{$this->imagen}' 
                nombre = '{$this->nombre}',
                apellido = '{$this->apellido}',
				WHERE id_usuario = '{$this->id_usuario}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM productos WHERE id = '{$this->id_usuario}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>
