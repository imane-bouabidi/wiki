<?php
class TagDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getAllTags()
    {
        $query = "SELECT * FROM tag";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $tags = array();
        foreach ($result as $row) {
            $tags[] = new Tag($row['idTag'], $row['tag_name']);

        }
        return $tags;
    }
    public function getTagById($id)
    {
        $query = "SELECT * FROM tag where idTag = '$id'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
            $tags = $result['tag_name'];
        return $tags;
    }
    public function getTagsForWiki($idWiki)
    {
        $query = "SELECT * FROM wiki_tags where idWiki = '$idWiki'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $tags = array();
        foreach ($result as $row) {
            $tags[] = $this->getTagById($row['idTag']);
        }
        return $tags;
    }

    // public function getBusById($busID)
    // {
    //     $query = "SELECT * FROM Bus WHERE busID = :busID";
    //     $params = [':busID' => $busID];
    //     $result = $this->fetch($query, $params);

    //     // Assuming you have a CompanyDAO and a Company class
    //     $companyDAO = new CompanyDAO();
    //     $company = $companyDAO->getCompanyById($result['companyID']);

    //     return new Bus($result['busID'], $result['busNumber'], $result['licensePlate'], $company, $result['capacity']);
    // }

    public function addTag($tagName)
    {
        $query = "INSERT INTO tag VALUES (0,:tag_name)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':tag_name', $tagName);
        $stmt->execute();
        header('Location:index.php?action=adminDash');
    }

    public function updateTag($id, $nom)
    {
        $query = "UPDATE tag SET tag_name = :nom
                  WHERE idTag = :id";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        header('Location:index.php?action=adminDash');

    }


    public function deleteTag($id)
    {
        $query = "DELETE FROM tag WHERE idTag = :idTag";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':idTag', $id);
        $stmt->execute();
        header('Location:index.php?action=adminDash');

    }
}


?>