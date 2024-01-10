<?php
class Categorie {
    public $idCat;
    public $catName;
    public $dateCreation;

    public function __construct($idCat,$catName, $dateCreation) {
        $this->idCat = $idCat;
        $this->catName = $catName;
        $this->dateCreation = $dateCreation;
    }

    public function getIdCat() {
        return $this->idCat;
    }

    public function getCatName() {
        return $this->catName;
    }

    public function getDateCreation() {
        return $this->dateCreation;
    }
}
