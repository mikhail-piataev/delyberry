
<div class="box-principal">
<h3 class="titulo">Editar pago <?php echo $datos['monto']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar pago <?php echo $datos['monto']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="monto" class="control-label">Monto</label>
				        <input class="form-control" value="<?php echo $datos['monto']; ?>" name="monto" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="metodo_pago" class="control-label">Metodo de pago</label>
				        <input class="form-control" value="<?php echo $datos['metodo_pago']; ?>" name="metodo_pago" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="estado" class="control-label">Estado de pago</label>
				        <input class="form-control" value="<?php echo $datos['estado']; ?>" name="estado" type="text" required>
				    </div>
					<input value="<?php echo $datos['id_pago']; ?>" name="id_pago" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
