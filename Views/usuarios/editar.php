
<div class="box-principal">
<h3 class="titulo">Editar Usuario <?php echo $datos['nombre']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Usuario <?php echo $datos['nombre']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-3">
	  			<div class="panel panel-default">
				  <div class="panel-body">
				    <img class="img-responsive" src="<?php echo URL;?>Views/_template/imagenes/usuarios/<?php echo $datos['imagen']; ?>">
				  </div>
				</div>
	  		</div>
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="id_usuario" class="control-label">Id del usuario</label>
				        <input class="form-control" value="<?php echo $datos['id_usuario']; ?>" name="id_usuario" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="login" class="control-label">Login</label>
				        <input class="form-control" value="<?php echo $datos['login']; ?>" name="login" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="password" class="control-label">Contraseña</label>
				        <input class="form-control" value="<?php echo $datos['password']; ?>" name="password" type="number" required>
				    </div>
					<div class="form-group">
				      <label for="email" class="control-label">Email</label>
				        <input class="form-control" value="<?php echo $datos['email']; ?>" name="email" type="mail" required>
				    </div>
					<div class="form-group">
				      <label for="role_usuario" class="control-label">Role_usuario</label>
				        <input class="form-control" value="<?php echo $datos['role_usuario']; ?>" name="role_usuario" type="text" required>
				    </div>
					<div class="form-group">
				      <label for="nombre" class="control-label">Nombre</label>
				        <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
				    </div>
					<div class="form-group">
				      <label for="apellido" class="control-label">Apellido</label>
				        <input class="form-control" value="<?php echo $datos['apellido']; ?>" name="apellido" type="text" required>
				    </div>
					
						<div class="form-group">
				      <label for="inputEmail" class="control-label">Imagen</label>
				        <input class="form-control" name="imagen" id="imagen" type="file" required>
				    </div>
				    <input value="<?php echo $datos['id']; ?>" name="id" type="hidden" required>
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
