<?php namespace Controllers;
	
	//usamos los modelos de las Clases producto  
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
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "pagos" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->pago->set("monto", $_POST['monto']);
					$this->pago->set("metodo_pago", $_POST['metodo_pago']);
					$this->pago->set("estado", $_POST['estado']);
					$this->pago->add();
					header("Location: " . URL . "pagos");
				}
			}
		}

		public function editar($id_pago){
			if(!$_POST){
				$this->pago->set("id_pago", $id_pago);
				$datos = $this->pago->view();
				return $datos;
			}else{
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "_template". DS . "imagenes" . DS . "pagos" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->pago->set("id_pago", $_POST['id_pago']);
					$this->pago->set("monto", $_POST['monto']);
					$this->pago->set("metodo_pago", $_POST['metodo_pago']);
					$this->pago->set("estado", $_POST['estado']);
					$this->pago->edit();
					header("Location: " . URL . "pagos");
				}
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
