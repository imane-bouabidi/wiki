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

    // public function updateBus($bus)
    // {
    //     $busID = $bus->getBusID();
    //     $busNumber = $bus->getBusNumber();
    //     $licensePlate = $bus->getLicensePlate();
    //     $companyID = $bus->getCompanyID(); // This line is causing the issue
    //     $capacity = $bus->getCapacity();

    //     $query = "UPDATE Bus SET busNumber = :busNumber, licensePlate = :licensePlate, 
    //               companyID = :companyID, capacity = :capacity 
    //               WHERE busID = :busID";
    //     $params = [
    //         ':busID' => $busID,
    //         ':busNumber' => $busNumber,
    //         ':licensePlate' => $licensePlate,
    //         ':companyID' => $companyID,
    //         ':capacity' => $capacity
    //     ];

    //     $this->execute($query, $params);
    // }


    // public function deleteBus($busID)
    // {
    //     $query = "DELETE FROM Bus WHERE busID = :busID";
    //     $params = [':busID' => $busID];

    //     return $this->execute($query, $params);
    // }
}


?>