-- Création de la base de données
CREATE DATABASE IF NOT EXISTS wiki;

-- Utilisation de la base de données
USE wiki;

-- Table des utilisateurs
CREATE TABLE Users (
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('author','admin') DEFAULT 'author';
);

-- Table des catégories
CREATE TABLE Categorie (
    idCat INT AUTO_INCREMENT PRIMARY KEY,
    cat_name VARCHAR(50) UNIQUE NOT NULL,
    date_creation DATE NOT NULL
);

-- Table des wikis
CREATE TABLE Wiki (
    idWiki INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50) NOT NULL,
    contenu VARCHAR(50) NOT NULL,
    idCat INT NOT NULL,
    date_creation DATE NOT NULL,
    image VARCHAR(50),
    isActive BOOLEAN DEFAULT 0,
    idUser INT,
    CONSTRAINT fk_user_id FOREIGN KEY (idUser) REFERENCES Users(idUser),
    CONSTRAINT fk_idCat FOREIGN KEY (idCat) REFERENCES Categorie(idCat)
);

-- Table des tags
CREATE TABLE Tag (
    idTag INT AUTO_INCREMENT PRIMARY KEY,
    tag_name VARCHAR(50) UNIQUE NOT NULL
);

-- Table de liaison entre les wikis et les tags
CREATE TABLE Wiki_Tags (
    idWiki_tag INT AUTO_INCREMENT PRIMARY KEY,
    idWiki INT NOT NULL,
    idTag INT NOT NULL,
    CONSTRAINT fk_idWiki FOREIGN KEY (idWiki) REFERENCES Wiki(idWiki),
    CONSTRAINT fk_idTag FOREIGN KEY (idTag) REFERENCES Tag(idTag)
);
