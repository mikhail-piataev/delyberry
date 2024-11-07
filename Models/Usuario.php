<?php namespace Models;

	class Usuario{

		//creamos las variables para guardar los valores de la base de datos
		private $id_usuario;
    private $email;
		private $password;
		private $role_usuario;
    private $nombre;
    private $apellido;
	
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
			$sql = "INSERT INTO usuarios (id_usuario, email, password, role_usuario, nombre, apellido)
					VALUES (null, '{$this->email}', '{$this->password}', '{$this->role_usuario}', '{$this->nombre}', '{$this->apellido}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM usuarios WHERE id_usuario = '{$this->id_usuario}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE usuarios SET 
				email = '{$this->email}', 
				password = '{$this->password}', 
        role_usuario = '{$this->role_usuario}',
        nombre = '{$this->nombre}',
        apellido = '{$this->apellido}',
				WHERE id_usuario = '{$this->id_usuario}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM usuarios WHERE id_usuario = '{$this->id_usuario}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>
