ALTER TABLE vendedores
ADD CONSTRAINT FK_jefe_id
FOREIGN KEY (jefe) REFERENCES vendedores(id);