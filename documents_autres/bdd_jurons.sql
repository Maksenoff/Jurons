#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: infraction
#------------------------------------------------------------

CREATE TABLE infraction(
        id_infraction Int  Auto_increment  NOT NULL ,
        libelle       Varchar (50) NOT NULL ,
        tarif         Float NOT NULL
	,CONSTRAINT infraction_PK PRIMARY KEY (id_infraction)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: profil
#------------------------------------------------------------

CREATE TABLE profil(
        id_profil Int  Auto_increment  NOT NULL ,
        grade     Varchar (50) NOT NULL COMMENT "utilisateur/admin" 
	,CONSTRAINT profil_PK PRIMARY KEY (id_profil)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        id_utilisateur Int  Auto_increment  NOT NULL ,
        Nom            Varchar (50) NOT NULL ,
        Prenom         Varchar (50) NOT NULL ,
        mail           Varchar (50) NOT NULL ,
        login          Varchar (50) NOT NULL ,
        mdp            Varchar (50) NOT NULL ,
        solde          Float NOT NULL ,
        id_profil      Int NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (id_utilisateur)

	,CONSTRAINT Utilisateur_profil_FK FOREIGN KEY (id_profil) REFERENCES profil(id_profil)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: balance
#------------------------------------------------------------

CREATE TABLE balance(
        id_utilisateur Int NOT NULL ,
        id_infraction  Int NOT NULL ,
        dateBalance    Varchar (50) NOT NULL
	,CONSTRAINT balance_PK PRIMARY KEY (id_utilisateur,id_infraction)

	,CONSTRAINT balance_Utilisateur_FK FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
	,CONSTRAINT balance_infraction0_FK FOREIGN KEY (id_infraction) REFERENCES infraction(id_infraction)
)ENGINE=InnoDB;

