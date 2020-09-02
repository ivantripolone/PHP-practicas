CREATE TABLE usuarios(
    id INT(11) NOT NULL AUTO_INCREMENT ,
    nombre VARCHAR(100) NOT NULL , 
    apellido VARCHAR(100) NOT NULL , 
    email VARCHAR(100) NOT NULL , 
    password VARCHAR(50) NOT NULL , 
    CONSTRAINT pk_usuarios PRIMARY KEY (id)

) ;
