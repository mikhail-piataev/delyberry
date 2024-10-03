DROP DATABASE IF EXISTS delyberry;

CREATE DATABASE delyberry;

CREATE TABLE productos (
  id_producto INT(11) NOT NULL PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  precio DECIMAL,
  descripcion TEXT,
  imagen VARCHAR(200)
);

CREATE TABLE carritos (
  id_carrito INT(11) NOT NULL PRIMARY KEY,
  id_producto_fk INT(11),
  id_pedido_fk INT(11),
  cantidad INT(11)
);

CREATE TABLE pedidos (
  id_pedido INT(11) NOT NULL PRIMARY KEY,
  id_cliente_fk INT(11),
  id_repartidor_fk INT(11),
  id_direccion_fk INT(11),
  hora TIME,
  fecha DATE,
  estado ENUM('solicitado','listo', 'entregado'),
  id_pago_fk INT(11)
);

CREATE TABLE pagos (
  id_pago INT(11) NOT NULL PRIMARY KEY,
  monto DECIMAL,
  metodo_pago ENUM('tarjeta', 'mercado_pago', 'efectivo'),
  estado ENUM('solicitado','listo')
);

CREATE TABLE usuarios (
  id_usuario INT(11) NOT NULL PRIMARY KEY,
  login VARCHAR(50),
  password VARCHAR(50),
  email VARCHAR(50),
  role_usuario ENUM('admin','cliente','repartidor'),
  nombre VARCHAR(50),
  apellido VARCHAR(50)
);

CREATE TABLE direcciones (
  id_direccion INT(11) NOT NULL PRIMARY KEY,
  barrio VARCHAR(50),
  calle VARCHAR(50),
  altura VARCHAR(50),
  piso INT(11),
  departamento VARCHAR(50)
);

CREATE TABLE clientes_direcciones (
  id_cd INT(11) NOT NULL PRIMARY KEY,
  id_cliente_fk INT(11),
  id_direccion_fk INT(11)
);

