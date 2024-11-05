<div class="box-principal">
<h3 class="titulo">Agregar Usuarios<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo usuario</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="id_usuario" class="control-label">Id del usuario</label>
				        <input class="form-control" name="id_usuario" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Precio</label>
				        <input class="form-control" name="precio" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripcion</label>
				        <input class="form-control" name="descripcion" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Imagen</label>
				        <input class="form-control" name="imagen" id="imagen" type="file" required>
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
