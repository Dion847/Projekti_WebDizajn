<?php
namespace Admin\Lib;

include 'Database.php';
use PDO;

class Food extends Database
{
    private $id;
    private $title;
    private $description;
    private $image;


    function getId()
    {
        return $this->id;
    }
    function getTitle()
    {
        return $this->title;
    }
    function setTitle($t)
    {
        $this->title = $t;
    }
    function getDescription()
    {
        return $this->description;
    }
    function setDescription($d)
    {
        $this->description = $d;
    }
    function getImage()
    {
        return $this->image;
    }
    function setImage($i)
    {
        $this->image = $i;
    }

    public function getAllFood()
    {
        $sql = "SELECT * FROM food";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Food");
        return $stmt->fetchAll();
    }

    public function getFoodId($id)
    {
        $sql = "SELECT * FROM food";
        $sql .= " where id=?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Food");
        return $stmt->fetch();
    }

    public function createFood()
    {
        $title = $this->getTitle();
        $description = $this->getDescription();
        $image = $this->getImage();
        $sql = "INSERT INTO food (title,description,image) VALUES (?,?,?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$title, $description, $image]);
        return true;
    }



    public function updateFood()
    {
        $id = $this->getId();
        $title = $this->getTitle();
        $description = $this->getDescription();
        $image = $this->getImage();
        $sql = "UPDATE food SET title='$title',description='$description',image='$image' where id=?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }


    public function deleteFood()
    {
        $id = $this->getId();
        $sql = "DELETE FROM food where id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }

}

?>