DROP DATABASE IF EXISTS text_editor;

CREATE DATABASE text_editor;

USE text_editor;

CREATE TABLE posts (id INT AUTO_INCREMENT PRIMARY KEY, content TEXT);

SHOW TABLES;

INSERT INTO posts (content)
VALUES  ("<p>Hola, ni nombre es <b>Johan</b></p>"),
        ("<p>Hello World<p>"),
        ("<p>Petare, <b>Venezuela</b></p>");

SELECT * FROM posts;

