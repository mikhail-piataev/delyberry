<?php namespace Models;

    class Seccion{

        //variables de la tabla secciones
        private $id;
        private $nombre;


        //conexion

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

        //listar
        public function listar(){
            $sql = "SELECT * FROM secciones";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        //agregar seccion
        public function add(){
            $sql = "INSERT INTO secciones (id,nombre) VALUES (null, '{$this->nombre}')";
            $this->con->consultaSimple($sql);
        }

        //eliminar
        public function delete(){
            $sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

         //editar
         public function edit(){
            $sql = "UPDATE secciones SET nombre = '{$this->nombre}' WHERE  id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //consulta para cargar la "vista" por defecto
        public function view(){
            $sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    



    }




?>