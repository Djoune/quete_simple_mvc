<?php
namespace Controller;
// src/Controller/ItemController.php
use Model\ItemManager;

class ItemController {
    /**
     * @param $itemManager
     */
    public function index()
    {
        $itemManager = new ItemManager();
        $itemManager = $itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';

        return $itemManager;
    }

    public function show(int $id)
    {
        $itemManager = new ItemManager();
        $item = $itemManager->selectOneItem($id);

        require __DIR__ . '/../View/showItem.php';
    }
}

?>