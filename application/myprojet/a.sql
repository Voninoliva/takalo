create database personnel;
use personnel;
create table personne(
    id int auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
    mdp varchar(50),
    email varchar(50)
);