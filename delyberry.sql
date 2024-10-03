DROP DATABASE IF EXISTS delyberry;

CREATE DATABASE delyberry;

CREATE TABLE productos (
  id_producto INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  precio DECIMAL,
  descripcion TEXT,
  imagen VARCHAR(200)
);

CREATE TABLE carritos (
  id_carrito INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_producto_fk INT(11),
  id_pedido_fk INT(11),
  cantidad INT(11)
);

CREATE TABLE pedidos (
  id_pedido INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_cliente_fk INT(11),
  id_repartidor_fk INT(11),
  id_direccion_fk INT(11),
  hora TIME,
  fecha DATE,
  estado ENUM('solicitado','listo', 'entregado'),
  id_pago_fk INT(11)
);

CREATE TABLE pagos (
  id_pago INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  monto DECIMAL,
  metodo_pago ENUM('tarjeta', 'mercado_pago', 'efectivo'),
  estado ENUM('solicitado','listo')
);

CREATE TABLE usuarios (
  id_usuario INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  login VARCHAR(50),
  password VARCHAR(50),
  email VARCHAR(50),
  role_usuario ENUM('admin','cliente','repartidor'),
  nombre VARCHAR(50),
  apellido VARCHAR(50)
);

CREATE TABLE direcciones (
  id_direccion INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  barrio VARCHAR(50),
  calle VARCHAR(50),
  altura VARCHAR(50),
  piso INT(11),
  departamento VARCHAR(50)
);

CREATE TABLE clientes_direcciones (
  id_cd INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_cliente_fk INT(11),
  id_direccion_fk INT(11)
);

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Arepa Venezolana', 1000.00, 'Es el plato mas comido de Venzuela', 'img/arepa.jpg'),
(2, 'Cachapa Venezolana', 1500.50, 'Con malta sabe mejor!', 'img/cachapa.jpg'),
(3, 'Sopa Venezolana', 2000.99, 'Con carne o cangrejo', 'img/sopa.jpg'),
(4, 'Pan de jamon', 25000.00, 'Para navidad', 'img/pan.jpg'),
(5, 'Pizza', 300.75, 'Pizza con mucho queso!', 'img/pizza.jpg'),
(6, 'Coca Cola', 350.10, 'Bebida refrescante!', 'img/coca.jpg'),
(7, 'Chinotto', 400.99, 'Bebida Venezolana', 'img/chinotto.jpg'),
(8, 'Malta', 450.49, 'De Maltin Polar!', 'img/malta.jpg'),
(9, 'Cerveza Polar', 500.00, 'Se toma con cachapas', 'img/polar.jpg'),
(10, 'Agua', 550.89, 'Agua mineral', 'img/agua.jpg');
