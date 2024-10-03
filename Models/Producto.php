<?php namespace Models;

    class Producto{

        //creamos variables pribadas para los datos de la base de datos

        private $id;
        private $nombre;
        private $precio;
        private $descripcion;
        private $imagen;

        //usamos la conexión
        private $con;

        public function __construct(){
            $this->con = new Conexion();
        }

        //funciones de seteo y de optención (set y get)
        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }

        //consultas a la base de datos
        //listado
        public function listar(){
            $sql = "SELECT * FROM productos";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        //agregar
        public function add(){
            $sql = "INSERT INTO productos(id, nombre, precio, descripcion, imagen) VALUE (null, '{$this->nombre}', '{$this->precio}', '{$this->descripcion}', '{$this->imagen}')";
            $this->con->consultaSimple($sql);
        }

        //eliminar
        public function delete(){
            $sql = "DELETE FROM productos WHERE id='{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //editar
        public function edit(){
            $sql = "UPDATE productos SET nombre ='{$this->nombre}', precio='{$this->precio}', descripcion = '{$this->descripcion}', WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //consulta para cargar la "vista" por defecto
        public function view(){
            $sql = "SELECT * FROM productos";
            $datos = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }
    }
?>
