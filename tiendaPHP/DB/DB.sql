CREATE DATABASE Tienda_php;
USE Tienda_php;

CREATE TABLE usuarios(
    usuario_id    int(255) auto_increment not null,
    nombres       varchar(100) not null,  
    apellidos     varchar(255) not null,
    email         varchar(255) not null,
    contraseña    varchar(255) not null,  
    rol           varchar(20),
    CONSTRAINT pk_usuarios PRIMARY KEY(usuario_id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=innodb;

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin','admin@admin.com','admin','admin');

CREATE TABLE categorias(
    categoria_id    int(255) auto_increment not null,
    nombre       varchar(100) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(categoria_id)
)ENGINE=innodb;

INSERT INTO categorias VALUES(NULL,'Manga corta');
INSERT INTO categorias VALUES(NULL,'Manga larga');
INSERT INTO categorias VALUES(NULL,'Musculosa');
INSERT INTO categorias VALUES(NULL,'Deportiva');
INSERT INTO categorias VALUES(NULL,'Elegante');

CREATE TABLE productos(
    producto_id    int(255) auto_increment not null,
    categoria_id   int(255) not null,
    nombre        varchar(100) not null,  
    descripcion   text,
    precio        float(255,2) not null,
    stock         int(100) not null,  
    fecha         date not null,
    imagen        varchar(255),
    CONSTRAINT pk_productos PRIMARY KEY(producto_id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) 
    REFERENCES categorias(categoria_id)
)ENGINE=innodb;

CREATE TABLE direcciones(
    direccion_id    int(255) auto_increment not null,
    usuario_id      int(255) not null,
    pais            varchar(100) not null,  
    provincia       varchar(100) not null,
    localidad       varchar(100) not null,
    postal          int(100) not null,  
    calle           varchar(100) not null,
    numero          int(100) not null,
    piso            int(100),
    depto           varchar(10),
    descripcion     text,
    CONSTRAINT pk_direcciones PRIMARY KEY(direccion_id),
    CONSTRAINT fk_direccion_usuario FOREIGN KEY(usuario_id) 
    REFERENCES usuarios(usuario_id)
)ENGINE=innodb;


CREATE TABLE pedidos(
    pedido_id      int(255) auto_increment not null,
    usuario_id     int(255) not null,
    direccion_id   int(255) not null,
    total          float(100,2) not null,
    estado         varchar(50) not null,
    fecha          date not null,
    CONSTRAINT pk_pedidos PRIMARY KEY(pedido_id),
    CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) 
    REFERENCES usuarios(usuario_id),
    CONSTRAINT fk_pedido_direccion FOREIGN KEY(direccion_id) 
    REFERENCES direcciones(direccion_id)
)ENGINE=innodb;

CREATE TABLE productos_pedidos(
    id            int(255) auto_increment not null,
    pedido_id     int(255) not null,
    producto_id   int(255) not null,
    cantidad      int(10),
    CONSTRAINT pk_productos_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(pedido_id),
    CONSTRAINT fk_producto_pedido FOREIGN KEY(producto_id) REFERENCES productos(producto_id)
)ENGINE=innodb;



