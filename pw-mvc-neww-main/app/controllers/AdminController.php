<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../middleware/AuthMiddleware.php';
require_once __DIR__ . '/../models/Product.php';

class AdminController extends Controller
{
    private function model(): Product {
        require __DIR__ . '/../../config/database.php';
        return new Product($pdo);
    }
    private function data(): array {
        return [
            'name' => trim($_POST['name'] ?? ''),
            'price' => (float)($_POST['price'] ?? 0),
            'stock' => (int)($_POST['stock'] ?? 0),
            'category_id' => $_POST['category_id'] ?? ''
        ];
    }
    public function index(): void {
        AuthMiddleware::handle();
        $product=$this->model();
        $this->render('admin/index', ['products'=>$product->all(), 'total'=>$product->count()], 'Dashboard Admin - MyStore');
    }
    public function create(): void {
        AuthMiddleware::handle();
        $error=null;
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $d=$this->data();
            if ($d['name']==='' || $d['price']<0 || $d['stock']<0) $error='Isi nama produk dan pastikan harga/stok tidak negatif.';
            else { $this->model()->create($d); header('Location: admin'); exit; }
        }
        $this->render('admin/form',['product'=>null,'error'=>$error], 'Tambah Produk - MyStore');
    }
    public function edit(): void {
        AuthMiddleware::handle();
        $id=(int)($_GET['id'] ?? 0); $model=$this->model(); $product=$model->find($id);
        if (!$product) { http_response_code(404); echo 'Produk tidak ditemukan'; return; }
        $error=null;
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $d=$this->data();
            if ($d['name']==='' || $d['price']<0 || $d['stock']<0) $error='Isi nama produk dan pastikan harga/stok tidak negatif.';
            else { $model->update($id,$d); header('Location: admin'); exit; }
            $product=array_merge($product,$d);
        }
        $this->render('admin/form',['product'=>$product,'error'=>$error], 'Edit Produk - MyStore');
    }
    public function delete(): void {
        AuthMiddleware::handle();
        if ($_SERVER['REQUEST_METHOD']==='POST') $this->model()->delete((int)($_POST['id'] ?? 0));
        header('Location: admin'); exit;
    }
    public function admin(): void 
    {
        $this--> index();
    }
}
