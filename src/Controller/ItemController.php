<?php
namespace Controller;
// src/Controller/ItemController.php
use Model\ItemManager;
;

class ItemController extends AbstractController {

    /**
     * @param $itemManager
     */
    public function index() {
        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems();
        return $this->twig->render('Item/index.html.twig', ['items' => $items]);
    }

    public function show(int $id) {
        $itemManager = new ItemManager();
        $item = $itemManager->selectOneItem($id);
        return $this->twig->render('Item/showItem.html.twig', ['item' => $item]);


    }
}