<?php

require_once __DIR__ . '/Controller.php';

class CategoryController extends Controller
{
    public function index()
    {
        require_once __DIR__ . '/../../config/database.php';

        $categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

        $this->render('categories/index', ['categories' => $categories], 'Kategori - Kelontong Store');
    }
}