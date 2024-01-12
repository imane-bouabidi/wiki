<?php
class Wiki {
    private $idWiki;
    private $titre;
    private $contenu;
    private $tags;
    private $idCat;
    private $dateCreation;
    private $image;
    private $isActive;
    private $idUser;

    public function __construct($idWiki,$titre, $contenu,$tags, $idCat, $dateCreation, $image, $isActive, $idUser) {
        $this->idWiki = $idWiki;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->tags = $tags;
        $this->idCat = $idCat;
        $this->dateCreation = $dateCreation;
        $this->image = $image;
        $this->isActive = $isActive;
        $this->idUser = $idUser;
    }

    public function getIdWiki() {
        return $this->idWiki;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function getIdCat() {
        return $this->idCat;
    }

    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function getImage() {
        return $this->image;
    }

    public function getIsActive() {
        return $this->isActive;
    }

    public function getIdUser() {
        return $this->idUser;
    }
    public function getTags() {
        return $this->tags;
    }
}
