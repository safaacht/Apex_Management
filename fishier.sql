CREATE DATABASE apex_management;


CREATE TABLE joueur(
id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT null,
    nationalite varchar(255) NOT null,
    email varchar(255) NOT null UNIQUE,
    role varchar(255) NOT null,
   valeur_marchande float
);


CREATE TABLE coach(
id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT null,
    nationalite varchar(255) NOT null,
    email varchar(255) NOT null UNIQUE,
    style_coaching varchar(255) NOT null,
    annee_exp int not null
);


CREATE TABLE equipe(
id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255) NOT null UNIQUE,
    budget float NOT null,
    manager varchar(255) NOT null
);

CREATE TABLE contract(
id int PRIMARY KEY AUTO_INCREMENT,
salaire float NOT null,
    close_rachat float NOT null,
    date_fin date NOT null,
    joueur_id int null,
    FOREIGN KEY (joueur_id) REFERENCES joueur(id),
    coach_id int null,
    FOREIGN KEY (coach_id) REFERENCES coach(id),
    equipe_id int NOT null,
    FOREIGN KEY (equipe_id) REFERENCES equipe(id)
);

CREATE TABLE transfer(
id int PRIMARY KEY AUTO_INCREMENT,
    montant float NOT null,
    status varchar(255) NOT null,
    joueur_id int null,
    FOREIGN KEY (joueur_id) REFERENCES joueur(id),
    coach_id int null,
    FOREIGN KEY (coach_id) REFERENCES coach(id),
    equipe_dep int NOT null,
    FOREIGN KEY (equipe_dep) REFERENCES equipe(id),
    equipe_arr int NOT null,
    FOREIGN KEY (equipe_arr) REFERENCES equipe(id)

)


ALTER TABLE contract ADD date_deb DATE NOT NULL