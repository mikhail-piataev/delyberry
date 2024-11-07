<div class="box-principal">
<h3 class="titulo">Usuario <?php echo $datos['id_usuario']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del usuario <?php echo $datos['id_usuario']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Id: </b><?php echo $datos['id_usuario']; ?>
            </li>
            <li class="list-group-item">
              <b>E-mail: </b><?php echo $datos['email']; ?>
            </li>
            <li class="list-group-item">
              <b>Password: </b><?php echo $datos['password']; ?>
            </li>
            <li class="list-group-item">
              <b>Role: </b><?php echo $datos['role_usuario']; ?>
            </li>
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Apellido: </b><?php echo $datos['apellido']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
