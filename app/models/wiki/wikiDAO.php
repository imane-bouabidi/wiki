<?php
class WikiDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }
    public function addWiki($wiki)
    {
        $query = $this->pdo->prepare("INSERT INTO wiki (titre,contenu,idCat,date_creation,image,isActive,idUser) values (:titre,:contenu,:idCat,:date_creation,:image,:isActive,:idUser)");
        $titre = $wiki->getTitre();
        $contenu = $wiki->getContenu();
        $idCat = $wiki->getIdCat();
        $date_creation = $wiki->getDateCreation();
        $image = $wiki->getImage();
        $isActive = $wiki->getIsActive();
        $idUser = $wiki->getIdUser();
        $query->bindParam(':titre', $titre);
        $query->bindParam(':contenu', $contenu);
        $query->bindParam(':idCat', $idCat);
        $query->bindParam(':date_creation', $date_creation);
        $query->bindParam(':image', $image);
        $query->bindParam(':isActive', $isActive);
        $query->bindParam(':idUser', $idUser); 
        $query->execute();

        $idwiki = $this->pdo->lastInsertId();
        // echo $wiki->getTags();
        foreach ($wiki->getTags() as $tag) {
            $query = $this->pdo->prepare("INSERT INTO wiki_tags (idWiki,idTag) VALUES (:idWiki,:idTag)");
            $query->bindParam(':idWiki', $idwiki);
            $query->bindParam(':idTag', $tag);
            $query->execute();

        }
        header('Location:index.php?action=home');

    }
    public function UpdateWiki($wiki)
    {
        $query = $this->pdo->prepare("UPDATE wiki SET titre = :titre, contenu = :contenu, idCat = :idCat, date_creation = :date_creation, image = :image, isActive = :isActive, idUser = :idUser WHERE idWiki = :idWiki");
        $idWiki = $wiki->getIdWiki();
        $titre = $wiki->getTitre();
        $contenu = $wiki->getContenu();
        $idCat = $wiki->getIdCat();
        $date_creation = $wiki->getDateCreation();
        $image = $wiki->getImage();
        $isActive = $wiki->getIsActive();
        $idUser = $wiki->getIdUser();
        $query->bindParam(':titre', $titre);
        $query->bindParam(':contenu', $contenu);
        $query->bindParam(':idCat', $idCat);
        $query->bindParam(':date_creation', $date_creation);
        $query->bindParam(':image', $image);
        $query->bindParam(':isActive', $isActive);
        $query->bindParam(':idUser', $idUser);
        $query->bindParam(':idWiki', $idWiki);
        $query->execute();

        $query2 = $this->pdo->prepare("DELETE FROM wiki_tags WHERE idWiki = :idWiki");
        $query2->bindParam(':idWiki', $idWiki);
        $query2->execute();
        foreach ($wiki->getTags() as $tag) {
            $query = $this->pdo->prepare("INSERT INTO wiki_tags (idWiki,idTag) VALUES (:idWiki,:idTag)");
            $query->bindParam(':idWiki', $idWiki);
            $query->bindParam(':idTag', $tag);
            $query->execute();

        }
        header('Location:index.php?action=authorDash');
    }

    public function getAllWikis()
    {
        $query = "SELECT * FROM wiki";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $wikis = array();
        foreach ($result as $row) {
            $wikis[] = new Wiki($row['idWiki'], $row['titre'], $row['contenu'],0, $row['idCat'], $row['date_creation'], $row['image'], $row['isActive'], $row['idUser']);
        }
        return $wikis;
    }

    public function getWikiById($id)
    {
        $query = "SELECT * FROM wiki where idWiki = '$id'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
            $wikis = new Wiki($row['idWiki'], $row['titre'], $row['contenu'],0, $row['idCat'], $row['date_creation'], $row['image'], $row['isActive'], $row['idUser']);
        return $wikis;
    }


    public function getLatestWikis($limit = 3)
{
    $query = "SELECT * FROM wiki where isActive = 0 ORDER BY date_creation DESC LIMIT :limit";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    
    $result = $stmt->fetchAll();
    $wikis = array();
    
    foreach ($result as $row) {
        $wikis[] = new Wiki(
            $row['idWiki'],
            $row['titre'],
            $row['contenu'],
            0,
            $row['idCat'],
            $row['date_creation'],
            $row['image'],
            $row['isActive'],
            $row['idUser']
        );
    }
    
    return $wikis;
}

public function hideWiki($id){
    $query = "UPDATE wiki SET isActive = 1 WHERE idWiki = '$id'";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    header('Location:index.php?action=wikiManagement');
}
public function deleteWiki($id){
    $query = "DELETE FROM wiki WHERE idWiki = '$id'";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    header('Location:index.php?action=authorDash');
}
public function hideToShowWiki($id){
    $query = "UPDATE wiki SET isActive =0 WHERE idWiki = '$id'";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    header('Location:index.php?action=wikiManagement');
}


}


?>