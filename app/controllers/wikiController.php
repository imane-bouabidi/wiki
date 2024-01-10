<?php

class WikiController {

    public function addWiki() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];
        $tags = $_POST['tags'];
        $idCat = $_POST['category'];
        $idUser = $_SESSION['idUser'];
    }

    // Ajoutez d'autres méthodes pour mettre à jour, supprimer, etc.
}
