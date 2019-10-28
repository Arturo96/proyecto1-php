CREATE DATABASE blog_master;

USE blog_master;

CREATE TABLE usuarios(
    id          int(10) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(100) not null,
    email       varchar(100) not null,
    password    varchar(20) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

CREATE TABLE categorias(
    id          int(10) auto_increment not null,
    nombre      varchar(100) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
);

CREATE TABLE entradas(
    id            int(10) auto_increment not null,
    usuario_id    int(10) not null,
    categoria_id  int(10) not null,
    titulo        varchar(255) not null,
    descripcion   MEDIUMTEXT,
    fecha         date not null,

    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
);

