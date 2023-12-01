create database orario;
use orario;

create table docenti( 
 id int auto_increment primary key,
 nome varchar(50));
 
create table materie( 
 id int auto_increment primary key,
 nome varchar(50));
 
create table classi( 
 id int auto_increment primary key,
 aula varchar(50),
 piano varchar(50),
 n_maschi int,
 n_femmine int
 );
 
 create table classi_docenti_materie(
	docente_id int,
	classe_id int,
    materia_id int,
    ora int,
    giorno varchar(10)
 );
 
ALTER TABLE classi_docenti_materie add FOREIGN KEY (docente_id) REFERENCES docenti(id);
ALTER TABLE classi_docenti_materie add FOREIGN KEY (classe_id) REFERENCES classi(id); 
ALTER TABLE classi_docenti_materie add FOREIGN KEY (materia_id) REFERENCES materie(id);
 
 
 
 
 