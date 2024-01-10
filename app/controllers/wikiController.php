<?php

class WikiController {

    public function addWiki() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES["image"]["tmp_name"], "asstes/img/" . $image);
        $tags = $_POST['tags'];
        $idCat = $_POST['category'];
        // $idUser = $_SESSION['idUser'];
        $idUser = 1;
        $dateActuelle = date("Y-m-d H:i:s");
        $wiki = new Wiki($title,$content,$tags,$idCat,$dateActuelle,$image,0,$idUser);
        $wikiDAO = new WikiDAO();
        $wikiDAO->addWiki($wiki);
        include_once 'views\addWiki.php';
    }

    // Ajoutez d'autres méthodes pour mettre à jour, supprimer, etc.
}
