<?php
namespace Model;
// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

class ItemManager {

// récupération de tous les items
    /**
     * @return array
     */
    public function selectAllItems() : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    /**
     * @param int $id
     * @return array
     */
    public function selectOneItem(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }
}
