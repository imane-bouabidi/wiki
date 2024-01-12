<?php

class WikiController {

    public function addWiki() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES["image"]["tmp_name"], "asstes/img/" . $image);
        $tags = $_POST['tags'];
        $idCat = $_POST['category'];
        $idUser = $_SESSION['author'];
        $dateActuelle = date("Y-m-d H:i:s");
        $wiki = new Wiki(0,$title,$content,$tags,$idCat,$dateActuelle,$image,0,$idUser);
        $wikiDAO = new WikiDAO();
        $wikiDAO->addWiki($wiki);
        include_once 'views\addWiki.php';
    }
    public function UpdateWiki() {
        $id = $_GET['id'];
        if(isset($_POST['image'])) {
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES["image"]["tmp_name"], "asstes/img/" . $image);
        }else{
            $image = $_GET['img'];
        }
        $title = $_POST['title'];
        $content = $_POST['content'];
        $tags = $_POST['tags'];
        $idCat = $_POST['category'];
        $isActive = $_POST['isActive'];
        $idUser = $_SESSION['author'];
        $dateActuelle = date("Y-m-d H:i:s");
        $wiki = new Wiki($id,$title,$content,$tags,$idCat,$dateActuelle,$image,$isActive,$idUser);
        $wikiDAO = new WikiDAO();
        $wikiDAO->UpdateWiki($wiki);
        include_once 'views\addWiki.php';
    }

    public function hideWiki(){
        $idWiki = $_GET['id'];
        $wikiDAO = new WikiDAO();
        $wikiDAO->hideWiki($idWiki);
    }
    public function showUpdateWiki(){
        $idWiki = $_GET['id'];
        $catDAO = new CategoryDAO();
        $catsDATA = $catDAO->getAllCategories();
        $wikiDAO = new WikiDAO();
        $tags = new TagDAO();
        $tagsDATA = $tags->getAllTags();
        $tagsInWiki = $tags->getTagsForWiki($idWiki);
        $wikis = $wikiDAO->getWikiById($idWiki);
        include_once 'views/updateWiki.php';
    }
    public function hideToShowWiki(){
        $idWiki = $_GET['id'];
        $wikiDAO = new WikiDAO();
        $wikiDAO->hideToShowWiki($idWiki);
    }
    public function deleteWiki(){
        $idWiki = $_GET['id'];
        $wikiDAO = new WikiDAO();
        $wikiDAO->deleteWiki($idWiki);
    }

    // Ajoutez d'autres méthodes pour mettre à jour, supprimer, etc.
}
