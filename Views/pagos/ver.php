<div class="box-principal">
<h3 class="titulo">Pago <?php echo $datos['monto']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del pago <?php echo $datos['monto']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive" src="<?php echo URL;?>Views/_template/imagenes/pagos/<?php echo $datos['imagen']; ?>">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Monto: </b><?php echo $datos['monto']; ?>
            </li>
            <li class="list-group-item">
              <b>Estado de pago: </b><?php echo $datos['metodo_pago']; ?>
            </li>
            <li class="list-group-item">
              <b>Estado: </b><?php echo $datos['estado']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
