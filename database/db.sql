create database mvc_crud_php;

use mvc_crud_php;

create table cars (
  id int primary key auto_increment,
  name char(50),
  brand char(50),
  model char(50),
  color char(50)
);

