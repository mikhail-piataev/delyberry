<div class="box-principal">
<h3 class="titulo">Listado de pagos<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de pagos</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		     <th>Monto</th>
		      <th>Metodo de pago</th>
		      <th>Estado de pago</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			<td><img class="imagen-avatar" src="<?php echo URL; ?>Views/_template/imagenes/pagos/<?php echo $row['imagen']; ?>"></td>
						<td><a href="<?php echo URL; ?>pagos/ver/<?php echo $row['id_pago']; ?>"><?php echo $row['monto']; ?></a></td>
			    	<td><?php echo $row['metodo_pago']; ?></td>
			    	<td><?php echo $row['estado']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>pagos/editar/<?php echo $row['id_pago']; ?>">Editar</a>
								<a class="btn btn-danger" href="<?php echo URL; ?>pagos/eliminar/<?php echo $row['id_pago']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>
