<?php namespace Views;

use Models\Producto as Producto;

$template = new Template();

    class Template{
        
        public function __construct(){
            
            $producto = new Producto;


?>

<!--  acá va el html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicio</title>
    <link rel="stylesheet" href="<?php echo URL;?>Views/css/boostrap.css  "  >
    <link rel="stylesheet" href="<?php echo URL;?>Views/css/general.css  "  >
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="../../delyberry/login/login.php" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
    <h1>Nuestros productos</h1>


    <img src="Views/_template/imagenes/productos/agua.jpg" alt="botella de agua">
    <?php 
        $data=$producto->listar();
        $currentDir = dirname(__FILE__); 
        if ($data!=NULL) {
          while($filas = mysqli_fetch_array($data)){
            //$path = ROOT."Views".DS."_template".DS."imagenes".DS."productos".DS.$filas['imagen']; 
            $path = "Views/_template/imagenes/productos/".$filas['imagen'];          
            //  print_r($path); 
            echo "
              <section class='product-card' >
                <img src='". URL ."/" .$path." ' alt='".$filas['nombre']."' class='product-image' >
                <div class='product-info'>
                  <h3 class='product-name'>".$filas['nombre']."</h3>
                  <p class='product-price'>".$filas['precio']."</p>
                  <p class='product-description'>".$filas['descripcion']."</p>
                </div>
              </section>
            ";
          }
        }
 
       } //cierra   public function __construct

       public function __destruct(){

      


   


    ?>
    <script src="<?php echo URL;   ?>Views/_temlate/js/boostrap.js" ></script>
</body>
</html>


<?php 
        } // cierra   public function __destruct()

} //cierra la class
?>
