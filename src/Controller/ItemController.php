<?php
namespace Controller;
// src/Controller/ItemController.php
use Model\ItemManager;

class ItemController {
    /**
     * @param $items
     */
    public function index() {
        $itemManager = new ItemManager();
        $itemManager = $itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';

        return $itemManager;
    }
}

?>