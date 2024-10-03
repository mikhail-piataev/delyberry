<?php namespace Models;

    class Estudiante{

        //creamos variables pribadas para los datos de la base de datos

        private $id;
        private $nombre;
        private $edad;
        private $promedio;
        private $imagen;
        private $id_seccion;
        private $fecha;



        //usamos la conexión
        private $con;


        public function __construct(){
            $this->con = new Conexion();
        }



        //funciones de seteo y de optención (set y get)
        public function set($atributo,$contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }


        //consultas a la base de datos

        //listado
        public function listar(){
            $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id ORDER BY id DESC";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        //agregar
        public function add(){
            $sql = "INSERT INTO estudiantes(id,nombre,edad,promedio,imagen,id_seccion,fecha) VALUE  (null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}', NOW()) ";
            $this->con->consultaSimple($sql);
        }

        //eliminar
        public function delete(){
            $sql = "DELETE FROM estudiantes WHERE id='{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //editar
        public function edit(){
            $sql = "UPDATE estudiantes SET nombre ='{$this->nombre}', edad='{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //consulta para cargar la "vista" por defecto
        public function view(){
            $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id WHERE t1.id = '{$this->id}'";
            $datos = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }





    }



?>
