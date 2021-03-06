drop table if exists Compte;


CREATE TABLE Compte (
	CompteID INT NOT NULL AUTO_INCREMENT,
	Pseudo VARCHAR(255) NOT NULL,
	Nom VARCHAR(255) NOT NULL,
	Prenom VARCHAR(255) NOT NULL,
	Email VARCHAR(255) NOT NULL,
	DateNaissance VARCHAR(255) NOT NULL,
	Promotion INT(16),
	SituationPro VARCHAR(255),
	Mdp VARCHAR(255) NOT NULL,
	TypeCompte enum('Admin','auteur') default 'auteur',
	PRIMARY KEY(CompteID)
);



	INSERT INTO Compte (Pseudo,Nom,Prenom,Email,DateNaissance,Promotion,SituationPro,Mdp,TypeCompte) VALUES
('RemyF','Phonesavanh','Remy','remy.phonesavanh@edu.ece.fr','1997-02-16',2020,'Etudiant','RemyP','Admin'),
('QuentinF','Fasquelle','Quentin','quentin.fasquelle@edu.ece.fr','1998-04-08',2021,'Etudiant','QuentinF','Admin'),
('BrieucJ','Jan','Brieuc','brieuc.jan@edu.ece.fr','1997-03-26',2020,'Etudiant','BrieucJ','Admin'),
('TomG','Guillermou','Tom','tom.guillermou@edu.ece.fr','1997-02-19',2020,'Etudiant','TomG','auteur'),
('MatthieuP','Poletto','Matthieu','matthieu.poletto@edu.ece.fr','1996-09-07',2019,'Etudiant','MatthieuP','auteur');