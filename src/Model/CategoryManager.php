<?php
namespace Model;

require __DIR__ . '/../../app/db.php';

class CategoryManager {

// récupération de tous les items
    /**
     * @return array
     */
    public function selectAllCategories() : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    /**
     * @param int $id
     * @return array
     */
    public function selectOneCategory(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }


}

?>