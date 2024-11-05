<div class="box-principal">
<h3 class="titulo">Producto <?php echo $datos['nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del producto <?php echo $datos['nombre']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive" src="<?php echo URL;?>Views/_template/imagenes/productos/<?php echo $datos['imagen']; ?>">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Precio: </b><?php echo $datos['precio']; ?>
            </li>
            <li class="list-group-item">
              <b>Descripción: </b><?php echo $datos['descripcion']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
