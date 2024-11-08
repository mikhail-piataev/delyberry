<?php namespace Controllers;
	
	//usamos los modelos de la clase Usuario 
	use Models\Pago as Pago;

	
	
	class pagosController{

		private $pago;


		public function __construct(){
			$this->pago = new Pago();

		}

		public function index(){
			$datos = $this->pago->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
					$this->pago->set("monto", $_POST['monto']);
					$this->pago->set("metodo_pago", $_POST['metodo_pago']);
					$this->pago->set("estado", $_POST['estado']);
					$this->pago->add();
					header("Location: " . URL . "pagos");
		}
		}

		public function editar($id_pago){
			if(!$_POST){
				$this->pago->set("id_pago", $id_pago);
				$datos = $this->pago->view();
				return $datos;
			}else{
					$this->pago->set("id_pago", $_POST['id_pago']);
					$this->pago->set("metodo_pago", $_POST['metodo_pago']);
					$this->pago->set("estado", $_POST['estado']);
					$this->pago->set("monto", $monto);
					$this->pago->edit();
					header("Location: " . URL . "pagos");
			}
		}

		public function ver($id_pago){
			$this->pago->set("id_pago",$id_pago);
			$datos = $this->pago->view();
			return $datos;
		}

		public function eliminar($id_pago){
			$this->pago->set("id_pago",$id_pago);
			$this->pago->delete();
			header("Location: " . URL . "pagos");
		}
}
	$pagos = new pagosController();

?>
