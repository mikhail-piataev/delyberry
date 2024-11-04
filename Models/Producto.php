<?php namespace Models;

	class Producto{

		//creamos las variables para guardar los valores de la base de datos
		private $id;
		private $nombre;
		private $precio;
		private $descripcion;
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
			$sql = "SELECT * FROM productos";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO productos (id, nombre, precio, descripcion, imagen)
					VALUES (null, '{$this->nombre}', '{$this->precio}', '{$this->descripcion}', '{$this->imagen}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM productos WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE productos SET 
				nombre = '{$this->nombre}', 
				precio = '{$this->precio}', 
				descripcion = '{$this->descripcion}', 
				imagen = '{$this->imagen}' 
				WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM productos WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>
