-- 
-- /*
--  * @file: tables_and_user.sql
--  * @author: jequeto@gmail.com
--  * @since: 2012 enero
-- */
-- drop database if exists daw2;
-- create database daw2;
-- 
-- create user daw2_user identified by 'daw2_user';
-- # Concedemos al usuario daw2_user todos los permisos sobre esa base de datos
-- grant all privileges on daw2.* to daw2_user;
-- 
-- use daw2;
-- 
-- set names utf8;
-- 
-- set sql_mode = 'traditional';
-- 
--tablas aplicacion
create table daw2_frutas (
id integer unsigned auto_increment  primary key
,nombre varchar(20) unique not null 
,categoria varchar(20) not null 
,descripcion varchar (250) not null 
,precio decimal (5,2) not null
,fecha_compra timestamp not null default current_timestamp()
)
engine = myisam;
