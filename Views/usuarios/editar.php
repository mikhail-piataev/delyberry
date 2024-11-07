
<div class="box-principal">
<h3 class="titulo">Editar Usuario <?php echo $datos['nombre']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Usuario <?php echo $datos['nombre']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1">
	  		</div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
				        <label for="email" class="control-label">E-mail </label>
				        <input class="form-control" value="<?php echo $datos['email']; ?>" name="email" type="mail" required>
				    </div>
						<div class="form-group">
				        <label for="password" class="control-label">Contraseña </label>
				        <input class="form-control" name="password" type="password" required>
				    </div>
					  <div class="form-group">
				        <label for="role_usuario" class="control-label">Role </label>
				        <input class="form-control" value="<?php echo $datos['role_usuario']; ?>" name="role_usuario" type="text" required>
				    </div>
						<div class="form-group">
				        <label for="nombre" class="control-label">Nombre </label>
				        <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
				    </div>
					  <div class="form-group">
				        <label for="apellido" class="control-label">Apellido </label>
				        <input class="form-control" value="<?php echo $datos['apellido']; ?>" name="apellido" type="text" required>
				    </div>
				    <input value="<?php echo $datos['id_usuario']; ?>" name="id_usuario" type="hidden" required>
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
