<div class="box-principal">
<h3 class="titulo">Agregar Pagos<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo pago</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="id_pago" class="control-label">Id del pago</label>
				        <input class="form-control" name="id_pago" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="monto" class="control-label">Monto</label>
				        <input class="form-control" name="monto" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="metodo_pago" class="control-label">Metodo de pago</label>
				        <input class="form-control" name="metodo_pago" type="text" required>
				    </div>
					<div class="form-group">
				      <label for="estado" class="control-label">Estado de pago</label>
				        <input class="form-control" name="estado" type="text" required>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
