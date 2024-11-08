<?php namespace Models;

	class Pago{

		//creamos las variables para guardar los valores de la base de datos
		private $id_pago;
		private $monto;
		private $metodo_pago;
		private $estado;
	
	
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
			$sql = "SELECT * FROM pagos";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO pagos (id_pago, monto, metodo_pago, estado)
					VALUES (null, '{$this->monto}', '{$this->metodo_pago}', '{$this->estado}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM pagos WHERE id_pago = '{$this->id_pago}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE pagos SET 
				monto = '{$this->monto}', 
				metodo_pago = '{$this->metodo_pago}', 
				estado = '{$this->estado}', 
				WHERE id_pago = '{$this->id_pago}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM pagos WHERE id_pago = '{$this->id_pago}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>
