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
		      <th>Id</th>
		      <th>E-mail</th>
		      <th>Role</th>
			  	<th>Nombre</th>
			  	<th>Apellido</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
					<tr>
							<td><?php echo $row['id_usuario']; ?></td>
							<td><a href="<?php echo URL; ?>usuarios/ver/<?php echo $row['id_usuario']; ?>"><?php echo $row['email']; ?></a></td>
							<td><?php echo $row['role_usuario']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['apellido']; ?></td>
							<td><a class="btn btn-warning" href="<?php echo URL; ?>usuarios/editar/<?php echo $row['id_usuario']; ?>">Editar</a>
									<a class="btn btn-danger" href="<?php echo URL; ?>usuarios/eliminar/<?php echo $row['id_usuario']; ?>">Eliminar</a>
							</td>
					</tr>
				<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>
