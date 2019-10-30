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

#INSERTS PARA CATEGORIAS#
INSERT INTO categorias VALUES(null, 'Acción');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

#INSERTS PARA ENTRADAS#
INSERT INTO entradas VALUES(null, 1, 1, 'Novedades de GTA 5 Online', 'Review del GTA 5', CURDATE());
INSERT INTO entradas VALUES(null, 1, 2, 'REVIEW de LOL Online', 'Todo sobre el LOL', CURDATE());
INSERT INTO entradas VALUES(null, 1, 3, 'Nuevos jugadores de Fifa 19', 'Review del Fifa 19', CURDATE());

INSERT INTO entradas VALUES(null, 2, 1, 'Novedades de Assasins Online', 'Review del Assasins', CURDATE());
INSERT INTO entradas VALUES(null, 2, 2, 'REVIEW de WOW Online', 'Todo sobre el WOW', CURDATE());
INSERT INTO entradas VALUES(null, 2, 3, 'Nuevos jugadores de PES 19', 'Review del Pro 19', CURDATE());

INSERT INTO entradas VALUES(null, 3, 1, 'Novedades de Call Of Duty Online', 'Review del COD', CURDATE());
INSERT INTO entradas VALUES(null, 3, 1, 'REVIEW de Fortnite Online', 'Todo sobre el Fortnite', CURDATE());
INSERT INTO entradas VALUES(null, 3, 3, 'Nuevos jugadores de Formula 1 2k20', 'Review del Formula 1', CURDATE());

