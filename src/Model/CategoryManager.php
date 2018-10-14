<?php
namespace Model;

class CategoryManager {

// récupération de tous les items
    /**
     * @return array
     */
    public function selectAllCategories() : array
    {
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
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }
}