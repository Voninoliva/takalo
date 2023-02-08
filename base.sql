create table personne(
    id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    prenom VARCHAR(30),
    adresse VARCHAR(30),
    contact VARCHAR(20),
    email VARCHAR(30),
    mdp VARCHAR(30),
    estAdmin int
);

create table categorie(
    idCategorie int PRIMARY KEY,
    nom VARCHAR(30)
);

create table objet(
    idObjet int PRIMARY KEY AUTO_INCREMENT,
    idPersonne int,
    nom VARCHAR(30),
    descri text,
    photo VARCHAR(50),
    prixEstimatif float,
    FOREIGN KEY (idPersonne) references personne(id)
);

create table registre(
    idRegistre int PRIMARY KEY,
    idObjet1 int,
    idObjet2 int,
    date timestamp,
    accepte int,
    FOREIGN KEY (idObjet1) references Objet(idObjet),
    FOREIGN KEY (idObjet2) references Objet(idObjet)
);

create table catOb(
    id int PRIMARY KEY AUTO_INCREMENT,
    idCategorie int,
    idObjet int,
    date timestamp,
    FOREIGN KEY (idCategorie) references categorie(idCategorie),
    FOREIGN KEY (idObjet) references Objet(idObjet)
);

insert into personne values (null,1,',now()Ra','Miora','Andoharanofotsy','+261342519458','Miora@gmail.com','root',null,1);,now()
insert into personne values (2,'Rakoto','Tafita','Andoharanofotsy','+261345264875','Tafita@gmail.com','root',null,1);,now()
insert into personne values (3,'Raza','Toavina','Andoharanofotsy','+261344685975','Toavina@gmail.com','root',null,1);,now()
insert into personne values (4,'Rabe','Jean','Andoharanofotsy','+261325168475','Jean@gmail.com','0000',0);
insert into personne values (5,'Ral','Steve','Andoharanofotsy','+261325168475','Steve@gmail.com','0000',0);
insert into personne values (6,'Randria','Pierre','Andoharanofotsy','+261325168475','Pierre@gmail.com','0000',0);

insert into categorie values (null,1,',now()Accessoires');
insert into categorie values (2,'Livres');

insert into objet values (null,1,4,now(),'Jamais Plus','Livre de Colleen Hoover','livres/Livre1.jpg',7.60);
insert into objet values (2,5,'Captive','Tome null,1 d,now()e la série','livres/Livre2.jpg',20);
insert into objet values (3,6,'Le suppléant','Livre écrit par le prince Harry','livres/Livre3.jpg',26.50);
insert into objet values (4,4,'Apple Watch','Nouveau Produit de montre Apple','accessoires/apple-watch.png',50);
insert into objet values (5,5,'Black Headphones','Casque noir sorti de denière marque','accessoires/black-headphones.png',15.50);
insert into objet values (6,6,'Earphones','Ecouteurs filaire rouge','accessoires/earphone.png',4.60);
insert into objet values (7,5,'Watch','Montre normal','accessoires/watch.png',5.60);
insert into objet values (8,4,'Headphones','Casque noir sans fil','accessoires/headphone.png',13);
insert into objet values (9,6,'HP Laptop',' Ordinateur Portable HP','accessoires/laptop.png',899);
insert into objet values (10,4,'Dualshock 4', 'Manette PS4 v2 sans fil blanc','accessoires/manette-ps4.jpg',50);
insert into objet values (11,5,'Console PS4', 'Console PS4 Slim 500 Go','accessoires/ps4.png',499);
insert into objet values (12,6,'Speaker', ' Speaker de type Alexa ','accessoires/speaker.png',20);
insert into objet values (13,4,'Casque VR', 'Casque de Réalité virtuelle ','accessoires/vr.png',199);


insert into catOb values (null,1,4,now());
insert into catOb values (null,1,5,now());
insert into catOb values (null,1,6,now());
insert into catOb values (null,1,7,now());
insert into catOb values (null,1,8,now());
insert into catOb values (null,1,9,now());
insert into catOb values (null,1,1,now());
insert into catOb values (null,1,1,now());
insert into catOb values (null,1,1,now());
insert into catOb values (null,1,1,now());
insert into catOb values (null,2,1,now());
insert into catOb values (null,2,2,now());
insert into catOb values (null,2,3,now());