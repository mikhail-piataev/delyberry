<div class="box-principal">
<h3 class="titulo">Listado de Usuarios<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de usuarios</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Id_usuario</th>
		      <th>Login</th>
		      <th>Password</th>
			  <th>Email</th>
		      <th>Role_usuario</th>
			  <th>Nombre</th>
			  <th>Apellido</th>
			  <th>Imagen</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			<td><img class="imagen-avatar" src="<?php echo URL; ?>Views/_template/imagenes/usuarios/<?php echo $row['imagen']; ?>"></td>
					<td><a href="<?php echo URL; ?>usuarios/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
			    	<td><?php echo $row['precio']; ?></td>
			    	<td><?php echo $row['descripcion']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>productos/editar/<?php echo $row['id']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>productos/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>
