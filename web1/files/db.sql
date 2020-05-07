CREATE USER 'test'@'%' IDENTIFIED BY '123456';

CREATE DATABASE test;

use test;

CREATE TABLE users (
  id int(11) primary key auto_increment,
  username varchar(256)
);

INSERT INTO users values (1, 'abc'),(2, 'ccc');

GRANT ALL ON test.* TO 'test'@'%';
