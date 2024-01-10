<?php
class TagController {
    public function addTag() {
        $nom = $_POST['tagName'];   
        $category = new TagDAO();
        $category->addTag($nom);
    }
    public function getAllTags() {
        $tags = new TagDAO();
        $tagsDATA = $tags->getAllTags();
        include_once 'views\adminDashboard.php';
    }

}
