<?php

class CategorieController {

    public function addCategory() {
        $nom = $_POST['catName'];   
        $dateActuelle = date("Y-m-d H:i:s");
        $category = new CategoryDAO();
        $category->addCatgory($dateActuelle,$nom);
    }
    public function updateCat() {
        $id = $_GET['id'];   
        $nom = $_POST['catName'];   
        $category = new CategoryDAO();
        $category->updateCat($id,$nom);
        include_once 'views\adminDashboard.php';
    }

    // Ajoutez d'autres méthodes pour mettre à jour, supprimer, etc.
}
