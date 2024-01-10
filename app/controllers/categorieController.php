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
        $nom = $_POST['updatedCatName'];   
        $category = new CategoryDAO();
        $category->updateCat($id,$nom);
        include_once 'views\adminDashboard.php';
    }
    public function deleteCat() {
        $id = $_GET['id'];   
        $cat = new CategoryDAO();
        $cat->deleteCat($id);
    }

}
