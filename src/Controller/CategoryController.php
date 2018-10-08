<?php
namespace Controller;
// src/Controller/ItemController.php
use Model\CategoryManager;

class CategoryController extends AbstractController {
    /**
     * @param $categoryManager
     */
    public function index(){
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllCategories();
        return $this->twig->render('Category/index.html.twig', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);
        return $this->twig->render('Category/showCategory.html.twig', ['category' => $category]);
    }
}