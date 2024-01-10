<?php
class AdminController {
    public function addTag() {
        $nom = $_POST['tagName'];   
        $category = new TagDAO();
        $category->addTag($nom);
    }
    public function ShowTagsCat() {
        $tags = new TagDAO();
        $tagsDATA = $tags->getAllTags();
        $cats = new CategoryDAO();
        $catsDATA = $cats->getAllCategories();
        include_once 'views\adminDashboard.php';
    }

}
