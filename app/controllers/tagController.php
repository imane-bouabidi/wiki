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

    public function updateTag() {
        $id = $_GET['id'];   
        $nom = $_POST['updatedTagName'];   
        $tag = new TagDAO();
        $tag->updateTag($id,$nom);
        include_once 'views\adminDashboard.php';
    }
    public function deleteTag() {
        $id = $_GET['id'];   
        $tag = new TagDAO();
        $tag->deleteTag($id);
    }

}
